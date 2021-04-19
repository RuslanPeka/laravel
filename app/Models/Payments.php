<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;

class Payments
{
    public function getData()
    {
        $payments = DB::table('payments')->get();
        echo '<pre>';
        var_dump($payments);
        echo '</pre>';
    }
}