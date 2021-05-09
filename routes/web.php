<?php

use Illuminate\Support\Facades\Route;

Route::get('commerce', [
    \Sailwork\Commerce\Http\Controllers\CommerceController::class,
    'index'
]);

Route::get('admin/product-type', [
   \Sailwork\Commerce\Http\Controllers\Catalog\ProductTypeController::class,
   'index'
])->middleware(['auth:sanctum', 'verified']);
