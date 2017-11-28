<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Order;

class OrderController extends Controller
{
    //
    public function addOrder(Request $req){
    	$order = new Order();
    	$order->phone_number = $req->phone;
    	$order->address = $req->ship_address;
    	$order->id_sales_off = "";
    	$order->id_process = 1;


    	echo $req->fullname;
    }


}
