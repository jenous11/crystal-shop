<?php

// use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CartController;
use Illuminate\Support\Facades\Route;

Route::get('/',[ProductController::class,'index'])->name('public.products.index');

Route::get('/dashboard',[ProductController::class, 'index'])->name('dashboard')->middleware(['auth', 'verified']);



Route::middleware('auth')->group(function () {

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Route::middleware(['auth','admin'])->prefix('admin')->group(function () {
//   // Route::get('/dashboard',[AdminController::class,'index'])->name('adminproducts.adminindex');
//   Route::get('/adminproducts', [AdminController::class,'index'])->name('adminproducts.adminindex');
//   Route::get('/adminproducts/create', [AdminController::class,'create'])->name('adminproducts.create');
//   Route::post('/adminproducts', [AdminController::class,'store'])->name('adminproducts.store');
//   Route::get('/adminproducts/{adminproduct}/edit', [AdminController::class,'edit'])->name('adminproducts.edit');
//   Route::put('/adminproducts/{adminproduct}', [AdminController::class,'update'])->name('adminproducts.update');
//   Route::delete('/adminproducts/{adminproduct}',[AdminController::class,'destroy'])->name('adminproducts.delete');
//   Route::post('/adminproducts/adminsearch',[AdminController::class,'search'])->name('adminproducts.adminsearch');
//   Route::post('/adminproducts/adminfilter',[AdminController::class,'filter'])->name('adminproducts.adminfilter');
//   });

  Route::get('/products',[ProductController::class,'index'])->name('products.index');
  Route::get('/products/{product}',[ProductController::class,'show'])->name('products.show');
  Route::post('/products/search',[ProductController::class,'search'])->name('products.search');
  Route::post('/products/filter',[ProductController::class,'filter'])->name('products.productfilter');
 Route::get('/about',[ProductController::class,'about'])->name('products.about');
 Route::post('/cart/{product}',[CartController::class,'store'])->name('cart.store');
 Route::get('/cart',[CartController::class,'index'])->name('cart');


  // Route::view("/nav",'layouts.nav');
  // Route::post('/test',[AdminController::class,'filter'])->name('adminproducts.adminfilter');
  // Route::view('/test',[ProductController::class,'mightlikeproducts']);
  // Route::view('/testindex','testindex');
  // Route::post('/test',[AdminController::class,'filter'])->name('adminproducts.adminfilter');



require __DIR__.'/auth.php';
