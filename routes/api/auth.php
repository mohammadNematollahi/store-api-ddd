<?php

use Illuminate\Support\Facades\Route;
use Infrastructure\Http\Controllers\Api\Auth\LoginController;
use Infrastructure\Http\Controllers\Api\Auth\LogoutController;
use Infrastructure\Http\Controllers\Api\Auth\RegisterController;

Route::post("/login" , [LoginController::class , "login"])->name("login");
Route::post("/register" , [RegisterController::class , "register"])->name("register");
Route::get("/logout" , [LogoutController::class , "logout"])->middleware("auth:sanctum")->name("logout");