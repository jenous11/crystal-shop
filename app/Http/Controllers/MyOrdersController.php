<?php

namespace App\Http\Controllers;

use App\Models\OrderItems;
use App\Models\Orders;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MyOrdersController extends Controller
{
  public function index(){
  $userId=Auth::id();
  $myOrders=Orders::where('user_id',$userId)->with('orderItems.product')->get();
  return view('orders.index', compact('myOrders'));
  }
}
