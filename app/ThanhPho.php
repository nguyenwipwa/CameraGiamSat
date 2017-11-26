<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ThanhPho extends Model
{
    //
	protected $table = "thanhpho";
	public $timestamps = false;

	public function address()
	{
		return $this->hasMany('App\Address', 'id_thanhpho');
	}
}
