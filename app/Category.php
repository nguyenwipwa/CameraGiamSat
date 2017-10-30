<?php

namespace App;

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

}
