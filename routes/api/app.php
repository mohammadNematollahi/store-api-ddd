<?php

use Illuminate\Support\Facades\Route;
use Infrastructure\Http\Controllers\Api\App\HomeController;
use Infrastructure\Http\Controllers\Api\App\CartItemController;
use Infrastructure\Http\Controllers\Api\App\PaymentController;
use Infrastructure\Http\Controllers\Api\App\ProductController;

// home 

Route::get("/" , [HomeController::class , "index"])->name("home");


// product 

Route::prefix("product")->group(function(){
    Route::get("/{product}" , [ProductController::class , "show"])->name("home.product");
    Route::get("{product}/add-to-cart" , [CartItemController::class , "addToCart"])->name("product.add.to.cart")->middleware("auth:sanctum");
});


Route::get("payment" , [PaymentController::class , "payment"])->name("payment")->middleware("auth:sanctum");
Route::get("callback" ,   [PaymentController::class , "callback"])->name("payment.callback");