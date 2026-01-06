<?php

use App\Http\Controllers\PageContoroller;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/',[PageContoroller::class,'home']);
Route::get('/about',[PageContoroller::class,'about']);
Route::get('/contact',[PageContoroller::class,'contact']);
Route::get('/user/{name}',[PageContoroller::class,'user']);
Route::get('/product',[PageContoroller::class,'product']);
Route::get('/products/{name}', [PageContoroller::class, 'productDetails']);
Route::resource('product',ProductController::class);
