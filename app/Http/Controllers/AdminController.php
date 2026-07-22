<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;


class AdminController extends Controller
{
  public function index()
  {
    // $adminproducts = Product::all();
    $adminproducts = Product::paginate(5);

    return view('admin.adminproducts.adminindex', compact('adminproducts'));
  }

  public function create()
  {
    $categories = Category::all();

    return view('admin.adminproducts.create', compact('categories'));
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
    return redirect()->route('adminproducts.adminindex');
  }

  public function show(Product $adminproducts){
    $adminproducts=Product::all();
    return view ('admin.adminproducts.adminindex',compact('adminproducts'));
  }

 public function edit(Product $adminproduct)  // we do route model binding as we only need 1 product.
 {
  $categories = Category::all();
    return view('admin.adminproducts.edit', compact('adminproduct','categories'));
  }

  public function update(Product $adminproduct,Request $request){

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
      $adminproduct['image']=$request->file('image')->store('images','public');
      // dd($product);

      }
      $adminproduct->update($data);
    return redirect()->route('adminproducts.adminindex');

  }

  public function destroy(Product $adminproduct ){

    $adminproduct->delete();
    return redirect()->route('adminproducts.adminindex');
  }
}
