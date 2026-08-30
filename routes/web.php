<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', [ProductController::class, 'index'])->name('public.products.index');

Route::get('/dashboard', [ProductController::class, 'index'])->name('dashboard')->middleware(['auth', 'verified']);

Route::middleware('auth')->group(function () {

  Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
  Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
  Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


Route::get('/products', [ProductController::class, 'index'])->name('products.index');
Route::get('/products/{product}', [ProductController::class, 'show'])->name('products.show');
Route::post('/products/search', [ProductController::class, 'search'])->name('products.search');
Route::post('/products/filter', [ProductController::class, 'filter'])->name('products.productfilter');
Route::get('/about', [ProductController::class, 'about'])->name('products.about');
Route::post('/cart/{product}', [CartController::class, 'store'])->name('cart.store');
Route::get('/cart', [CartController::class, 'index'])->name('cart.index');
Route::delete('/cart/{cartItem}', [CartController::class, 'delete'])->name('cartdelete');
Route::post('/cart/{product}/json', [CartController::class, 'storejson'])->name('cart.storejson');

Route::post('/checkout', [CheckoutController::class, 'store'])->name('checkout.store');

require __DIR__ . '/auth.php';
