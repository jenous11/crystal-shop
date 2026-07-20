<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/',[ProductController::class,'index'])->name('public.products.index');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware(['auth','admin'])->prefix('admin')->group(function () {

    Route::resource('products', AdminController::class);
});
Route::view("/nav",'layouts.nav');
Route::get('/products',[ProductController::class,'index'])->name('public.products.index');
Route::get('/products/{product}',[ProductController::class,'show'])->name('public.products.show');
// Route::resource('products',ProductController::class)->only(['index','show']);

Route::view('/test','layouts.footer');
require __DIR__.'/auth.php';
