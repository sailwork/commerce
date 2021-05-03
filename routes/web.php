<?php

use Illuminate\Support\Facades\Route;

Route::get('commerce', function() {
    return response()->json([
        'message' => 'This is Sailwork Commerce'
    ]);
});

Route::get('commerce-controller', [
    \Sailwork\Commerce\Http\Controllers\CommerceController::class,
    'index'
]);
