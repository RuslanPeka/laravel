<?php

namespace App\Http\Controllers;

use App\Models\Payments;

class PaymentsController
{
    public function index()
    {
        $objModel = new Payments;
        $objModel->getData();
    }
}