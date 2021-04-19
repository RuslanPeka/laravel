<?php

namespace App\Http\Controllers\DataControllers;

use App\Models\Orders;

class OrdersController
{
    public function index()
    {
        $objModel = new Orders;
        $objModel->getData();
    }
}