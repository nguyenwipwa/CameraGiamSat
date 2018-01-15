<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class SaleOff extends Model
{
	protected $table = "sales_off";
	public $timestamps = false;
    //

	public static function getSalesOffByID($id){
		return SaleOff::where('id', $id)->first();
	}
	public static function getListSalesOff(){
		return SaleOff::paginate(12);
	}
	function getSaleOff($key){
		$sale_off = $this::where('key', $key)->where('status', 1)->first();
		
		if(count($sale_off)==0){
			return response()->json(["status"=>'error', "message"=>"Mã sai hoặc đã hết hạn!"]);
		}else{
			return response()->json(["status"=>"success","message"=>$sale_off]);
		}
	}
	function getSaleOffAdmin($key){
		$sale_off = $this::where('key', $key)->where('status', 1)->first();
		
		if(count($sale_off)==0){
			return null;
		}else{
			return $sale_off;
		}
	}
	public function listOrder() {
		return $this->hasMany('App\Model\Order','id_sales_off', 'id');
	}

}
