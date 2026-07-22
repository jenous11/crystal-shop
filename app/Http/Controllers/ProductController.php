<?php

namespace App\Http\Controllers;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
      $products = Product::paginate(8);
      $searchedproduct=null;
      //  $products = Product::all();
    return view('products.index', compact('products','searchedproduct'));
    }


    public function show(Product $product)
    {
      // $product=Product::all();
      return view('products.show',compact('product'));
    }

    public function search(Request $request){

      $productname=request('name');
      // dd($searchedproduct);
    $searchedproduct = Product::where('name', 'LIKE', "%{$productname}%")->get();


              // dd($searchedproduct);
      return view('products.index',compact('searchedproduct'));
    }

}
