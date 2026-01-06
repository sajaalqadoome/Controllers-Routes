<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\PageContoroller;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

Route::get('/',[PageContoroller::class,'home']);
Route::get('/about',[PageContoroller::class,'about']);
Route::get('/contact',[PageContoroller::class,'contact']);
Route::get('/user/{name}',[PageContoroller::class,'user']);
Route::get('/product',[PageContoroller::class,'product']);
Route::get('/products/{name}', [PageContoroller::class, 'productDetails']);
Route::resource('product',ProductController::class);

Route::prefix('admin')->group(function()
{
    Route::get('/dashboard',[AdminController::class,'dashboard'])->name('admin.dashboard');
    Route::get('/reports', [AdminController::class,'reports'])->name('admin.reports');
}
);

Route::get('/contact', [ContactController::class,'create'])->name('contact.create');
Route::post('/contact', [ContactController::class,'store'])->name('contact.store');


