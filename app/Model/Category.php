<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //
	protected $table = "category";
	public $timestamps = false;

	public function product()
	{
		return $this->hasMany('App\Product','id_category', 'id');
	}
	public function getCategoryAdmin(){
		$listCate = $this::paginate(10);;
		$listCate1 = $this::all();
		foreach ($listCate as $key => $value) {
			$value->name = $this->deQuy($value->id_root, $listCate1, $value->name);
		}
		return $listCate;
	}
	public function getCategoryAll(){
		return $this::all();
	}
	
	private function deQuy($id_root, $listCate, $name){
		if($id_root==0) return $name;
		foreach ($listCate as $key => $value) {
			if($id_root==$value->id) {
				return $this->deQuy($value->id_root, $listCate, $value->name).'&nbsp;&nbsp;&gt;&nbsp;&nbsp;'.$name;
			}
		}
	}
}
