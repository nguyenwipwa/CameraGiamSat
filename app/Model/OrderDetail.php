<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use App\Model\Product;
class OrderDetail extends Model
{
	protected $table = "order_detail";
	public $timestamps = false;
    //
    public function getProduct() {
		// return $this->belongsTo('App\Model\Product', 'id_product', 'id');
		return Product::where('id', $this->id_product)->first();
	}
	
}
