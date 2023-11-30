<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('welcome');
});

Route::get('/user/register', [UserController::class,'add'])->name('user.register');
Route::post('/user', [ProductController::class,'store'])->name('user.store');

Route::get('/product', [ProductController::class,'index'])->name('product.index');
Route::get('/product/add', [ProductController::class,'add'])->name('product.add');
Route::post('/product', [ProductController::class,'store'])->name('product.store');
Route::get('/product/{product}/edit', [ProductController::class,'edit'])->name('product.edit');
Route::put('/product/{product}/update', [ProductController::class,'update'])->name('product.update');
Route::delete('/product/{product}/delete', [ProductController::class,'delete'])->name('product.delete');

