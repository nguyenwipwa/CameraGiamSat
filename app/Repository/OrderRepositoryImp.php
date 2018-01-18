<?php
/**
*/
namespace App\Repository;
use App\Repository\OrderRepository;
use App\Model\Order;
use App\Model\SaleOff;
use App\Model\OrderDetail;
use App\Model\AuthOrder;
use App\Mail\SendMail;
use Cart;
use Mail;

class OrderRepositoryImp implements OrderRepository
{
	
	public function getListOrderByIdUser($id_user)
	{
		return Order::where('id_user', $id_user)->get()->sortByDesc('created_at');
	}

	public function checkOrderByCodeOrder($id_code){
		return Order::where('code_order', $id_code)->get()->sortByDesc('created_at');

	}
	public function addOrder($req){
		$sale_off = new SaleOff();
		$order_detail = new OrderDetail();

		$order = new Order();
		$order->code_order = $req->code_order;
		$order->name_customer = $req->fullname;
		$order->phone_number = $req->phone;
		$order->address = $req->ship_address;
		$order->id_process = $req->process;
		$order->email = $req->email;
		$order->id_user = $req->id_user;
		if($req->process!=1)
			$order->active = 1;
		try {
			$sale = $sale_off->getSaleOffAdmin($req->key_sales_off);
			if($sale!=null){
				$sale->status = 0;
				$sale_off = $sale;
				$sale_off->save();
			}
			$order->key_sales_off =$sale==null ? null : $req->key_sales_off;
			$sale_off = $sale==null ? 0 : $sale->percent;
			$order->total = Cart::total1()*(1-$sale_off*0.01);
			$list_cart = Cart::content();
			$order->save();
			$id_order = $order->id;
			$this->addOrderDetail($list_cart, $id_order);
			$auth_order = $this->add_auth_order($order);
			SendMail::sendOrder($req, $auth_order);
			Cart::destroy();
			return response()->json(['status'=>'success', 'message'=>'Giỏ hàng của bạn đã được gửi đi, kiểm tra email để biết trạng thái giỏ hàng']);
		} catch (Exception $e) {
			return response()->json(['error'=>'error', 'message'=>'Có lỗi xảy ra!']);
		}
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
	public function sendOrder($req, $auth_order){
		$data = ['name' => $req->fullname, 'content'=>'Ngon chom', 'email'=> $req->email, 'listCart'=>Cart::content(), 'auth_order'=> $auth_order];
		Mail::send('mail.mailOrder', $data, function ($message) use ($req) {
			$message->from('nguyenwipwa@gmail.com', 'Camera giám sát');
			$message->to($req->email, $req->fullname);
			$message->subject('Subject');

		});
	}
	public function add_auth_order($order){
		$auth_order = new AuthOrder();
		$auth_order->id_order = $order->id;
		$auth_order->code_order = $order->code_order;
		$auth_order->key = csrf_token();
		$auth_order->date_order = $order->created_at;
		$auth_order->save();
		return $auth_order;
	}
	public function huyDonHang($code_order){
		$order = Order::where('code_order', $code_order)->where('id_process', 1)->first();
		if($order!=null){
			$order = Order::where('code_order', $code_order)->update(['id_process' => 5]);
			return response()->json(['status'=>'success', 'message' => 'Đã gửi yêu cầu hủy đơn hàng cho admin: '.$code_order]);
		}else{
			return response()->json(['status'=>'success', 'message' => 'Lỗi! Không hủy được đơn hàng có mã: '.$code_order]);
		}

	}
	public function getPriceByOrderID($id){
		$price = DB::table('order_detail')->select('price')->where('id_order', $id)->get();
		return $price;
	}
}

?>