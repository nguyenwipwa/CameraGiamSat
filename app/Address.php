<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    //
	protected $table = "address";
	public $timestamps = false;

	public function user()
	{
		return $this->belongsTo('App\User', 'id_user', 'id');
	}
	public function thanhPho()
	{
		return $this->belongsTo('App\ThanhPho', 'id_thanhpho', 'id');
	}

}
