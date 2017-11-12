<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model {
	//
	protected $table = "product";
	public $timestamps = false;

	public function product_category() {
		return $this->belongsTo('App\Category', 'id_category', 'id');
	}
}
