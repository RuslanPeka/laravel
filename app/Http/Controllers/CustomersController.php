<?php

namespace App\Http\Controllers;

use App\Models\Customers;

class CustomersController
{
    public function index()
    {
        $objModel = new Customers;
        $objModel->getData();
    }
} 