<?php

namespace App\Http\Controllers;

use App\Models\Goods;

class GoodsController
{
    public function index()
    {
        $objModel = new Goods;
        $objModel->getData();
    }
} 