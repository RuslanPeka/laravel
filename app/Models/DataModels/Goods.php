<?php

namespace App\Models\DataModels;

use Illuminate\Support\Facades\DB;

class Goods
{
    public function getData()
    {
        $goods = DB::table('goods')->get();
        echo '<pre>';
        var_dump($goods);
        echo '</pre>';
    }
}