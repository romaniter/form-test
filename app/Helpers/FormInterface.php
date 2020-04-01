<?php

namespace App\Helpers;
use Illuminate\Http\Request;
use App\Order;

interface FormInterface {

    //Интерфейс-фабрика, реализация метода будет в дочерних классах
    public static function save(Request $request, Order $Order);

}
