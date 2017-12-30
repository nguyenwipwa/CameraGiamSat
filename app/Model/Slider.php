<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
	protected $table = "slider";
	public $timestamps = false;

	public static function getListSlider(){
		return Slider::all();
	}
}
