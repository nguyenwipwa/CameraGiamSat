<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use App\Model\Order;
use DB;
class AuthOrder extends Model
{
	protected $table = "auth_order";
	public $timestamps = false;
    //
	public function auth_order($id_order, $code_order, $token)
	{
		try {
			$auth = $this::where('code_order', $code_order)->where('id_order', $id_order)->where('key', $token)->first();
			if($auth!=null){
				$order = Order::where('code_order',$code_order)->update(['active' => 1]);
				DB::table('auth_order')->where('code_order', $code_order)->delete();
				return "<h1>Xác thực hóa đơn thành công!</h1> <h3> <a href=".url('/')."> Trang chủ </a> </h3>";
			}else{
				return "<h1>Xác thực không tồn tại!</h1> <h3> <a href=".url('/')."> Trang chủ </a> </h3>";
			}
		} catch (Exception $e) {
			return "<h1>Xác thực hóa đơn Thất bại!</h1>";
		}
	}

	
}
