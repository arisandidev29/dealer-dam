<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name("home");


// product


Route::get("/product", function() {
    return view("product.index");
})->name("product");

Route::get("/product/view/{id}", function() {
    return view("product.product");
});

Route::get("/product/tambah", function() {
    return view("product.tambah");
})->name("product.tambah");
// auth

Route::controller(AuthController::class)->group(function() {
    Route::get("/login","login")->name("login");
    Route::get("/register",'register')->name("register");
});

