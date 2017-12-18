<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Product extends Model {
	//
	protected $table = "product";
	public $timestamps = false;

	public function category() {
		return $this->belongsTo('App\Category', 'id_category', 'id');
	}
	public function getProductAll(){
		return $this::paginate(12);
	}
	
}
