<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name("home");


// product

Route::get("/product", function() {
    return view("product.index");
});

// auth

Route::controller(AuthController::class)->group(function() {
    Route::get("/login","login")->name("login");
    Route::get("/register",'register')->name("register");
});

