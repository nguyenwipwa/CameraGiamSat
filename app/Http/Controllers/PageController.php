<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Category;
use App\Contact;
use App\Repository\ProductRepository;
use DB;

class PageController extends Controller
{
    //
    function trangchu(ProductRepository $product_cate)
    {
    	$category = Category::all();
    	$contact = Contact::all();
    	// $product = Category::where('id_category', 10)->get();
		// $users = DB::select('select * from Category where status = ?', [1]);
  //   	var_dump($users);
    	return view('index',['category'=>$category, 'contact'=>$contact]);
    }
}
