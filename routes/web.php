<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

Route::prefix('/')->group(function () {
    Route::get('/',[ProductController::class, 'HomeView']);
    Route::get('/home',[ProductController::class, 'HomeView']);
    Route::get('/product',[ProductController::class, 'ProductView']);
    Route::get('/about',[ProductController::class, 'AboutView']);
});

