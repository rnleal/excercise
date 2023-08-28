<?php

use App\Http\Controllers\HomepageController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

Route::get('/', [HomepageController::class, 'showHomepage'] );

// Products
Route::get('products', [ProductController::class, 'index']);
Route::get('products/create', [ProductController::class, 'create']);
Route::post('products/store', [ProductController::class, 'store']);
Route::get('product/{product}/view', [ProductController::class, 'view']);
Route::post('product/{product}/update', [ProductController::class, 'update']);
Route::delete('product/{product}/delete', [ProductController::class, 'delete']);

