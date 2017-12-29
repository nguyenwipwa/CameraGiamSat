<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use App\Model\ThanhPho;

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
		// return $this->belongsTo('App\Model\ThanhPho', 'id_thanhpho', 'id');
		return ThanhPho::where('id', $this->id_thanhpho)->first();
	}

}
