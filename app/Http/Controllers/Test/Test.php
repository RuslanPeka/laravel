<?php

namespace App\Http\Controllers\Test;

class Test
{
    public function index()
    {
        return response()->json('Test', 200);
    }
}