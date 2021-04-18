<?php

namespace App\Models\DataModels;

use Illuminate\Support\Facades\DB;

class Orders
{
    public function getData()
    {
        $orders = DB::table('orders')->get();
        echo '<pre>';
        var_dump($orders);
        echo '</pre>';
    }
}