<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainPageController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\UserController;

Route::get('/',[MainPageController::class,'index'])->name('mainpage');
Route::get('category/{slug_categoryName}',[CategoryController::class,'index'])->name('category');
Route::get('product/{slug_productName}',[ProductController::class,'index'])->name('product');
Route::get('cart',[CartController::class,'index'])->name('cart');
Route::get('payment',[PaymentController::class,'index'])->name('payment');
Route::get('order',[OrderController::class,'index'])->name('order');
Route::get('order-detail/{id}',[OrderController::class,'orderDetail'])->name('orderDetail');

Route::group(['prefix' => 'user'], function () {
    Route::get('/login',[UserController::class,'login'])->name('login');
    Route::get('/register', [UserController::class,'register'])->name('register');
});

