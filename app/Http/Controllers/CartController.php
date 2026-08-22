<?php

namespace App\Http\Controllers;

use App\Models\CartItems;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    //
    public function store(Product $product ){

$user_id=Auth::id();
// dd($user_id,$product->id);
$cartItem = CartItems::updateOrCreate(['user_id'=>$user_id, 'product_id'=>$product->id], []);
if ($cartItem->wasRecentlyCreated) {
   // do nothing, DB default already made it 1
} else {
   $cartItem->increment('quantity');
   return redirect()->back()->with('success', 'item added to the cart');
}

}
}
