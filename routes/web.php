<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProductController;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('/product', ProductController::class);
Route::resource('/users', UserController::class);
Route::resource('/contact', ContactController::class);
