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
      return redirect()->route('cart.index')->with('success', 'checkout was sucessfull!');
    } else {
      return "error, not the authenticated user";
    }
  }
}
