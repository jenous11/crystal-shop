<?php

namespace App\Http\Controllers;

use App\Models\CartItems;
use App\Models\OrderItems;
use App\Models\Orders;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class CheckoutController extends Controller
{
  //
  public function store()
  {
    if (Auth::check()) {
      $user_id = Auth::id();
      $currentuserscartitems = CartItems::with('product')->where('user_id', $user_id)->get();
      $total = 0;
      foreach ($currentuserscartitems as $items) {
        $total += $items->product->price * $items->quantity;
      }
      DB::transaction(function () use ($currentuserscartitems, $user_id, $total) {
        $order = Orders::create(['user_id' => $user_id, 'total' => $total]);

        foreach ($currentuserscartitems as $items) {
          OrderItems::create(['order_id' => $order->id, 'product_id' => $items->product->id, 'quantity' => $items->quantity, 'price' => $items->product->price]);
        }
        CartItems::where('user_id', $user_id)->delete();
      });
    }
  }
}
