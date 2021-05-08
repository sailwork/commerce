<?php

use Illuminate\Support\Facades\Route;

Route::get('commerce', function() {
    return response()->json([
        'message' => 'This is Sailwork Commerce'
    ]);
});

Route::get('admin/product-type', [
   \Sailwork\Commerce\Http\Controllers\Catalog\ProductTypeController::class,
   'index'
]);
