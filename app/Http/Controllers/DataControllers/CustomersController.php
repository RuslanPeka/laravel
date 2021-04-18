<?php

namespace App\Http\Controllers\DataControllers;

use App\Models\DataModels\Customers;

class CustomersController
{
    public function index()
    {
        $objModel = new Customers;
        $objModel->getData();
    }
}