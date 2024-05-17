<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name("home");


// product

Route::controller(ProductController::class)->group(function() {
    Route::get("/product",'index')->name("product");
    Route::get("/product/view/{id}",'show')->name("product.view");
    Route::get("/product/edit/{id}",'edit')->name("product.edit");
    Route::post("/product/edit/{id}",'update')->name("product.update");
    Route::get("/product/tambah","create")
                ->name("product.tambah")
                ->middleware(['auth',"can:managementProduct"]);
    Route::post("/product/tambah",'store')
                ->name("product.store")
                ->middleware(['auth',"can:managementProduct"]);
    Route::get("/product/delete/{id}",'destroy')->name("product.destroy");
});




// dashboard

Route::controller(AdminController::class)
            ->middleware('auth')
            ->group(function() {
                    Route::get("/dashboard",'dashboard')
                                ->name("admin.dashboard");
                    Route::get("/users",'users')
                                 ->name('admin.users')
                                 ->middleware('can:viewManagementUser');
                    Route::get("/users/view/{id}",'viewUser')
                                 ->name("admin.user");
                    Route::get("/user/delete/{id}","deleteUser")
                                 ->name("admin.deleteUser");

                    // update only role
                    Route::post("/user/edit/role/{id}","updateUserRole")
                                 ->name("admin.updateRole")
                                 ->middleware('can:viewManagementUser');
            });


// auth

Route::controller(AuthController::class)->group(function() {
    Route::get("/login","login")->name("login");
    Route::post("/login","doLogin")->name("doLogin");
    Route::get("/register",'register')->name("register");
    Route::post("/register",'doRegister')->name("doRegister");
    Route::get("/logout",'logout')->name("logout");
});

