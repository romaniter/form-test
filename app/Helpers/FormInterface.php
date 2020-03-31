<?php

namespace App\Helpers;
use Illuminate\Http\Request;
use App\Order;

interface FormInterface {

    public static function save(Request $request, Order $Order);

}
