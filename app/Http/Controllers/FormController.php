<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Helpers\FormInterface;
use App\Order;

class FormController extends Controller
{
    public function val(Request $request, FormInterface $FormInterface, Order $Order)
    {
        $this->validate($request, [
            'name' => 'required|max:64',
            'phone' => 'required|max:16',
            'message' => 'required',
        ]);
        $FormInterface->save($request, $Order);
        return $request;
    }
}
