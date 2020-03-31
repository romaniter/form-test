<?php

namespace App\Helpers;
use Illuminate\Http\Request;
use App\Helpers\FormInterface;
use App\Order;

class SaveEloquentORM implements FormInterface {

    public static function save(Request $request, Order $Order) {

        $Order->orders()->create([
            'name' => $request->name,
            'phone' => $request->phone,
            'message' => $request->message
        ]);

    }

}
