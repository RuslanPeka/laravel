<?php

namespace App\Models\DataModels;

use Illuminate\Support\Facades\DB;

class Customers
{
    public function getData()
    {
        $customers = DB::table('customers')->get();
        echo '<pre>';
        var_dump($customers);
        echo '</pre>';
    }
}