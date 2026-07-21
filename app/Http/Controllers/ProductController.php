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
           $products = Product::all();
    // $products = Product::paginate(5);
// dd($products);
    return view('products.index', compact('products'));
    }


    Public function show(Product $product)
    {
      return view('products.show',compact('product'));
    }

    public function search(Product $product , Request $request){
      $data=[
        'name'=> $request->name,
      ];
      $searchedproduct=DB::table('products')
              ->where('name',$data)
              ->get();
      return redirect()->route('products.index',compact('searchedproduct'));
    }

}
