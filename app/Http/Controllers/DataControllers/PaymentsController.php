<?php

namespace App\Http\Controllers\DataControllers;

use App\Models\DataModels\Payments;

class PaymentsController
{
    public function index()
    {
        $objModel = new Payments;
        $objModel->getData();
    }
}