<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class SaleOff extends Model
{
	protected $table = "sales_off";
	public $timestamps = false;
    //
	function getSaleOff($key){
		$sale_off = $this::where('key', $key)->first();
		
		if(count($sale_off)==0){
			return response()->json(["status"=>'error', "message"=>"Mã sai hoặc không tồn tại!"]);
		}else{
			return response()->json(["status"=>"success","message"=>$sale_off]);
		}
	}
	public function listOrder() {
		return $this->hasMany('App\Model\Order','id_sales_off', 'id');
	}

}
