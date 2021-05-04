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

Route::get('container', function() {
    dd(resolve(\Sailwork\Commerce\Contracts\Channel\ChannelHandler::class));
});
