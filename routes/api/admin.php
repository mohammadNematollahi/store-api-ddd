<?php

use Illuminate\Support\Facades\Route;
use Infrastructure\Http\Controllers\Api\Admin\AddressController;
use Infrastructure\Http\Controllers\Api\Admin\CityController;
use Infrastructure\Http\Controllers\Api\Admin\UserController;
use Infrastructure\Http\Controllers\Api\Admin\AdminController;
use Infrastructure\Http\Controllers\Api\Admin\BrandController;
use Infrastructure\Http\Controllers\Api\Admin\ProductController;
use Infrastructure\Http\Controllers\Api\Admin\CategoryController;
use Infrastructure\Http\Controllers\Api\Admin\OrderController;
use Infrastructure\Http\Controllers\Api\Admin\PaymentController;
use Infrastructure\Http\Controllers\Api\Admin\ProvinceController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::get("/", AdminController::class)->name('admin.home');


//show all users

Route::get("/users", [UserController::class, "index"])->name('admin.user.index');

//product category

Route::get("/categories", [CategoryController::class, "index"])->name('admin.category.index');

Route::prefix("category")->group(function () {

    Route::get("/{category}", [CategoryController::class, "show"])->name('admin.category.show');
    Route::post("/create", [CategoryController::class, "create"])->name('admin.category.create');
    Route::put("/edit/{category}", [CategoryController::class, "edit"])->name('admin.category.edit');
    Route::delete("/destroy/{category}", [CategoryController::class, "destroy"])->name('admin.category.destroy');
});

//brand

Route::get("/brands", [BrandController::class, "index"])->name('admin.brand.index');

Route::prefix("brand")->group(function () {

    Route::get("/{brand}", [BrandController::class, "show"])->name('admin.brand.show');
    Route::post("/create", [BrandController::class, "create"])->name('admin.brand.create');
    Route::put("/edit/{brand}", [BrandController::class, "edit"])->name('admin.brand.edit');
    Route::delete("/destroy/{brand}", [BrandController::class, "destroy"])->name('admin.brand.destroy');

});

//product

Route::get("/products", [ProductController::class, "index"])->name('admin.product.index');

Route::prefix("product")->group(function () {

    Route::get("/{product}", [ProductController::class, "show"])->name('admin.product.show');
    Route::post("/create", [ProductController::class, "create"])->name('admin.product.create');
    Route::put("/edit/{product}", [ProductController::class, "edit"])->name('admin.product.edit');
    Route::delete("/destroy/{product}", [ProductController::class, "destroy"])->name('admin.product.destroy');

});

//province

Route::get("/provinces", [ProvinceController::class, "index"])->name('admin.province.index');

Route::prefix("province")->group(function () {

    Route::get("/{province}", [ProvinceController::class, "show"])->name('admin.province.show');
    Route::post("/create", [ProvinceController::class, "create"])->name('admin.province.create');
    Route::put("/edit/{province}", [ProvinceController::class, "edit"])->name('admin.province.edit');
    Route::delete("/destroy/{province}", [ProvinceController::class, "destroy"])->name('admin.province.destroy');

});


//city

Route::get("/cities", [CityController::class, "index"])->name('admin.city.index');

Route::prefix("city")->group(function () {

    Route::get("/{city}", [CityController::class, "show"])->name('admin.city.show');
    Route::post("/create", [CityController::class, "create"])->name('admin.city.create');
    Route::put("/edit/{city}", [CityController::class, "edit"])->name('admin.city.edit');
    Route::delete("/destroy/{city}", [CityController::class, "destroy"])->name('admin.city.destroy');

});


//address

Route::get("/addresses", [AddressController::class, "index"])->name('admin.address.index');
Route::get("/address/{address}", [AddressController::class, "show"])->name('admin.address.show');

// payments

Route::get("/payments", [PaymentController::class, "index"])->name('admin.payment.index');
Route::get("/payment/{payment}", [PaymentController::class, "show"])->name('admin.payment.show');


//order

Route::get("/orders", [OrderController::class, "index"])->name('admin.order.index');
Route::get("/order/{order}", [OrderController::class, "show"])->name('admin.order.show');