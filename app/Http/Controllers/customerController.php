<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\customers;

class customerController extends Controller
{
    //customer_list
    function customer_list(){
        $customer_list = customers::all();
        return view('backend.customer.customer',[
            'customer_list'=>$customer_list,
        ]);
    }
}
