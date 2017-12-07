<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Order;
use Cart;
use App\Model\SaleOff;
class OrderController extends Controller
{
    //
	public function addOrder(Request $req){
		$order = new Order();
		$order->phone_number = $req->phone;
		$order->address = $req->ship_address;
		$order->id_sales_off = "";
		$order->id_process = 1;
		$list_cart = Cart::content();
		// foreach ($list_cart as $key => $value) {
  //   		# code...
		// 	return response()->json($value);
		// }
    	// echo $req->fullname;
	}

	public function getSaleOff(Request $req){
		$sale_off = new SaleOff();
		return $sale_off->getSaleOff($req->key);
	}

}
