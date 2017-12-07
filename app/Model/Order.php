<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
	protected $table = "order";
    //
    public function getSalesOff() {
		return $this->belongsTo('App\Model\SalesOff', 'id_sales_off', 'id');
	}
}
