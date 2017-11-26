<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    //
	protected $table = "news";
	public $timestamps = false;

	public function getNewsAll(){
		$paginate = $this::paginate(8);
		return $paginate;
	}
	public function getNewsById($id){
		return $this::find($id)->first();
	}

	public function newsDetail()
	{
		return $this->hasOne('App\Model\NewsDetail');
	}
}
