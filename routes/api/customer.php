<?php

use Illuminate\Support\Facades\Route;
use Infrastructure\Http\Controllers\Api\App\CartItemController;
use Infrastructure\Http\Controllers\Api\Customer\PaymentController;
use Infrastructure\Http\Controllers\Api\Customer\HomeController;
use Infrastructure\Http\Controllers\Api\Customer\AddressController;
use Infrastructure\Http\Controllers\Api\Customer\OrderController;

//home panel

Route::get("/" , HomeController::class)->name("panel");

// address

Route::prefix("address")->group(function(){

    Route::get("/", [AddressController::class, "index"])->name('panel.address.index');
    Route::get("/{address}", [AddressController::class, "show"])->name('panel.address.show');
    Route::post("/create", [AddressController::class, "create"])->name('panel.address.create');
    Route::put("/edit/{address}", [AddressController::class, "edit"])->name('panel.address.edit');
    Route::delete("/destroy/{address}", [AddressController::class, "destroy"])->name('panel.address.destroy');

});

Route::prefix("orders")->group(function(){

    Route::get("/", [OrderController::class, "index"])->name('panel.order.index');

});

Route::get("cart-items" , [CartItemController::class , "index"])->name("customer.cart.items.index");
Route::delete("cart-item/{cartItem}" , [CartItemController::class , "destroy"])->name("customer.cart.item.destroy");
