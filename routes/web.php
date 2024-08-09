<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController; //import class after Making a route

Route::get('/', [ProductController::class, 'index'])->name('product.index');
Route::get('product/create',[ProductController::class,'create'])->name('products.create');