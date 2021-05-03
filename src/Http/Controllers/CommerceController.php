<?php

namespace Sailwork\Commerce\Http\Controllers;

class CommerceController
{
    public function index()
    {
        return response()->json([
            'message' => 'Hello From Controller',
        ]);
    }
}
