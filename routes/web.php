<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/',[ProductController::class,'index',])->name('public.products.index');
// Route::get('/',[ProductController::class,'search',])->name('public.products.search');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware(['auth','admin'])->prefix('admin')->group(function () {

    Route::resource('adminproducts', AdminController::class);
});


Route::view("/nav",'layouts.nav');

Route::get('/admin/adminproducts/adminindex',[AdminController::class,'index'])->name('adminproducts.adminindex');
Route::post('/adminproducts/adminsearch',[AdminController::class,'search'])->name('adminproducts.adminsearch');
Route::post('/adminproducts/adminfilter',[AdminController::class,'filter'])->name('adminproducts.adminfilter');
Route::get('/products',[ProductController::class,'index'])->name('products.index');
// Route::get('products/show',[ProductController::class,'show'])->name('products.show');
Route::get('/products/{product}',[ProductController::class,'show'])->name('products.show');
Route::post('/products/search',[ProductController::class,'search'])->name('products.search');


// Route::post('/test',[AdminController::class,'filter'])->name('adminproducts.adminfilter');
Route::view('/test','test');
Route::view('/testindex','testindex');
Route::post('/test',[AdminController::class,'filter'])->name('adminproducts.adminfilter');

require __DIR__.'/auth.php';
