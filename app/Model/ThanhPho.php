<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class ThanhPho extends Model
{
    //
	protected $table = "thanhpho";
	public $timestamps = false;

	public function address()
	{
		return $this->hasMany('App\Model\Address', 'id_thanhpho');
	}
}
