<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function customer($id){
        $cus = \App\Customer::find($id);
        $orders = $cus->orders;
        $data = array(
            "customer"=>$cus->name,
            "orders"=>$orders

        );
        return view('customer',$data);

    }
}
