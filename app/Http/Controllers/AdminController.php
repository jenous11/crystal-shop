<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;


class AdminController extends Controller
{
  public function index()
  {
    $products = Product::all();
    // $products = Product::paginate(5);

    return view('admin.products.index', compact('products'));
  }

  public function create()
  {
    $categories = Category::all();

    return view('admin.products.create', compact('categories'));
  }

  public function store(Request $request)
  {

    $request->validate([
      'name' => 'required',
      'price' => 'required|numeric',
      'description' => 'required',
      'category_id' => 'required',

    ]);


    //get data from user
   $data=[
      'name' => $request->name,
      'description' => $request->description,
      'price' => $request->price,
      'category_id' => $request->category_id,
      'is_featured' => $request->is_featured,
      'is_stock' => $request->is_stock

    ];
    // validate
    if($request->hasFile('image')){
      $data['image']=$request->file('image')->store('images','public');
      // dd($product);

      }
      Product::create($data);
    return redirect()->route('products.index');
  }

  public function show(Product $products){
    $products=Product::all();
    return view ('admin.products.index',compact('products'));
  }

 public function edit(Product $product)  // we do route model binding as we only need 1 product.
 {
  $categories = Category::all();
    return view('admin.products.edit', compact('product','categories'));
  }

  public function update(Product $product,Request $request){

  //validate upadated data

      $request->validate([
      'name' => 'required',
      'price' => 'required|numeric',
      'description' => 'required',
      'category_id' => 'required',

    ]);
//get updated data
$data=[
  'name'=>$request->name,
  'description'=>$request->description,
  'price'=>$request->price,
  // 'image'=>$request->image,
  'category_id'=>$request->category_id,
  'is_featured'=>$request->is_featured,
  'is_stock'=>$request->is_stock,
  ];

  // validate image
    if($request->hasFile('image')){
      $product['image']=$request->file('image')->store('images','public');
      // dd($product);

      }
      $product->update($data);
    return redirect()->route('products.index');

  }

  public function destroy(Product $product ){

    $product->delete();
    return redirect()->route('products.index');
  }
}
