<?php

namespace App\Http\Controllers;

use App\Models\Orders;

class OrdersController
{
    public function index()
    {
        $objModel = new Orders;
        $objModel->getData();
    }
} 