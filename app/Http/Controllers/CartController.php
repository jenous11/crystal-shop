<?php

namespace App\Http\Controllers;

use App\Models\CartItems;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
  //
  public function store(Product $product)
  {

    $user_id = Auth::id();
    // dd($user_id,$product->id);
    $cartItem = CartItems::updateOrCreate(['user_id' => $user_id, 'product_id' => $product->id], []);
    if ($cartItem->wasRecentlyCreated) {
      // do nothing, DB default already made it 1
    } else {
      $cartItem->increment('quantity');
    }
    return redirect()->back()->with('success', 'item added to the cart');
  }

  public function storejson(Product $product)
  {

    $user_id = Auth::id();
    // dd($user_id,$product->id);
    $cartItemOne = CartItems::updateOrCreate(['user_id' => $user_id, 'product_id' => $product->id], []);

    if ($cartItemOne->wasRecentlyCreated) {
      // do nothing, DB default already made it 1
    } else {
      $cartItemOne->increment('quantity');
    }
    $cartItemTwo = CartItems::where('user_id', $user_id)->sum('quantity');
    return response()->json(['cartCount' => $cartItemTwo]);
  }




  public function index(Product $product)
  {
    if (Auth::check()) {
      // $user_id=Auth::id();
      $cartItems = CartItems::with('user', 'product')->get();
      // dd($cartItems);
      return view('cart.index', compact('cartItems'));
    }
  }

  public function delete(CartItems $cartItem)
  {

    $this->authorize('delete', $cartItem);
    $cartItem->delete();
    return redirect()->route('cart.index');
  }
}
