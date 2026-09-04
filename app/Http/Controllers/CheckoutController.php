<?php

namespace App\Http\Controllers;

use App\Models\CartItems;
use App\Models\OrderItems;
use App\Models\Orders;
use App\Services\EsewaGateway;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class CheckoutController extends Controller
{
  //
  public function store()
  {
    if (Auth::check()) {
      $user_id = Auth::id();
      $uuid = (string) Str::uuid();
      $currentuserscartitems = CartItems::with('product')->where('user_id', $user_id)->get();
      $total = 0;
      foreach ($currentuserscartitems as $items) {
        $total += $items->product->price * $items->quantity;
      }

      $order = DB::transaction(function () use ($currentuserscartitems, $user_id, $total, $uuid) {
        $order = Orders::create(['user_id' => $user_id, 'total' => $total, 'transaction_uuid' => $uuid]);

        foreach ($currentuserscartitems as $items) {
          OrderItems::create(['order_id' => $order->id, 'product_id' => $items->product->id, 'quantity' => $items->quantity, 'price' => $items->product->price]);
        }
        CartItems::where('user_id', $user_id)->delete();
        return $order;
      });
      $gateway = new EsewaGateway();
      $signature = $gateway->generateSignature($order);

      return $this->payWithEsewa($order, $signature);
      // return redirect()->route('esewaform');
    } else {
      return "error, not the authenticated user";
    }
  }
  public function payWithEsewa($order, $signature)
  {
    $data = [
      'total_amount' => $order->total,
      'amount' => $order->total,
      'transaction_uuid' => $order->transaction_uuid,
      'product_code' => 'EPAYTEST',
      'signature' => $signature,
      'success_url' => route('esewa.success'),
      'failure_url' => route('esewa.failure')
    ];
    return view('esewa.esewaform', compact('data'));
  }
  public function esewaSuccess()
  {
    $data = json_decode(base64_decode(request()->query('data')), true);

    // Verify signature
    $fields = explode(',', $data['signed_field_names']);
    $message = implode(',', array_map(fn($f) => "$f=" . $data[$f], $fields));
    $expected = base64_encode(hash_hmac('sha256', $message, config('services.esewa.esewa_secret_key'), true));

    if ($expected !== $data['signature']) {
      return view('esewa.failure');
    }

    // Update order
    $order = Orders::where('transaction_uuid', $data['transaction_uuid'])->first();
    $order->status = 'paid';
    $order->transaction_code = $data['transaction_code'];
    $order->save();

    return view('esewa.success', compact('data'));
  }

  public function esewaFailure()
  {
    return view('esewa.failure');
  }
}
