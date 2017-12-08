<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Order;
use Cart;
use Mail;
use App\Model\SaleOff;
use App\Model\OrderDetail;
class OrderController extends Controller
{
    //
	public function addOrder(Request $req){
		$sale_off = new SaleOff();
		$order_detail = new OrderDetail();

		$order = new Order();
		$order->code_order = $req->code_order;
		$order->name_customer = $req->fullname;
		$order->phone_number = $req->phone;
		$order->address = $req->ship_address;
		$order->id_process = 1;
		$order->email = $req->email;
		$order->id_user = $req->id_user;
		try {
			$sale = $sale_off->getSaleOffAdmin($req->key_sales_off);
			$order->key_sales_off =$sale==null ? null : $req->key_sales_off;
			$sale_off = $sale==null ? 0 : $sale->percent;
			$order->total = Cart::total1()*(1-$sale_off*0.01);
			$list_cart = Cart::content();
			$order->save();
			$id_order = $order->id;
			$this->addOrderDetail($list_cart, $id_order);
			$this->sendOrder($req);
			return response()->json(['status'=>'success', 'message'=>'Giỏ hàng của bạn đã được gửi đi, kiểm tra email để biết trạng thái giỏ hàng']);
		} catch (Exception $e) {
			return response()->json(['error'=>'error', 'message'=>'Có lỗi xảy ra!']);
		}
	}

	public function getSaleOff(Request $req){
		$sale_off = new SaleOff();
		return $sale_off->getSaleOff($req->key);
	}
	function addOrderDetail($list_cart, $id_order){
		try {
			foreach ($list_cart as $key => $value) {
				$order_detail = new OrderDetail();
				$order_detail->id_order = $id_order;
				$order_detail->id_product = $value->id;
				$order_detail->quatity = $value->qty;
				$order_detail->unit_price = $value->price;
				$order_detail->save();
			}
			return true;
		} catch (Exception $e) {
			return false;
		}
	}
	public function sendOrder(Request $req){
		$data = ['name' => $req->fullname, 'content'=>'Ngon chom', 'email'=> $req->email, 'token'=>$req->_token, 'listCart'=>Cart::content()];
		Mail::send('mail.mailOrder', $data, function ($message) use ($req) {
			$message->from('nguyenwipwa@gmail.com', 'Camera giám sát');
			$message->to($req->email, $req->fullname);
			$message->subject('Subject');

		});
	}
}
