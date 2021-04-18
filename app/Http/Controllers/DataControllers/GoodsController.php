<?php

namespace App\Http\Controllers\DataControllers;

use App\Models\DataModels\Goods;

class GoodsController
{
    public function index()
    {
        $objModel = new Goods;
        $objModel->getData();
    }
}