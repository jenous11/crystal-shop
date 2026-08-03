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
    return view('products.index', compact('products','searchedproduct'));
    }


    public function show(Product $product)
    {
      $products=Product::paginate(12);
      return view('products.show',compact('product','products'));
    }

    public function search(Request $request){

      $productname=request('name');
      // dd($searchedproduct);
    $searchedproduct = Product::where('name', 'LIKE', "%{$productname}%")->paginate(8);


              // dd($searchedproduct);
      return view('products.index',compact('searchedproduct'));
    }

public function filter(Request $request){

$data=$request->input('filteroptions');
// dd($data);

 $filteredresult=Product::where($data,true)
                        ->paginate(8);
                        // dd($filteredresult);
return view('products.index',compact('filteredresult'));
}
public function about(){
return view('products.about');
}
}
