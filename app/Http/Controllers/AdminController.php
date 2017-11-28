<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Category;
class AdminController extends Controller
{
    //

	function login(Request $req)
	{
		return view('admin.login');
	}

	function pageAdmin()
	{
		return view('admin.indexadmin');
	}
	function pageMenu(){
		$cate = new Category();
		$listCate = $cate->getCategoryAdmin();
		// return json_encode($listCate);
		return view("admin.danhsachmenu", ['listCate'=>$listCate]);
	}
}
