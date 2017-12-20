<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Order;
use Cart;
use Mail;
use App\Model\AuthOrder;
use App\Model\SaleOff;
use App\Model\OrderDetail;
use App\Repository\OrderRepository;
class OrderController extends Controller
{
    //
	public function huyDonHang(OrderRepository $orderRepository, $code_order){
		return $orderRepository->huyDonHang($code_order);
	}

	public function addOrder(OrderRepository $orderRepository, Request $req){
		return $orderRepository->addOrder($req);
	}

	public function getSaleOff(Request $req){
		$sale_off = new SaleOff();
		return $sale_off->getSaleOff($req->key);
	}
	
	function auth_order($id_order, $code_order, $token){
		$auth_order = new AuthOrder();
		return $auth_order->auth_order($id_order, $code_order, $token);
	}
	function paypal($hd,$total){
		return view('index.carts.paypal', ['total'=>$total, 'hd'=> $hd]);
	}
	function order_history(){
		return view('index.user.orderhistory');
	}
}
