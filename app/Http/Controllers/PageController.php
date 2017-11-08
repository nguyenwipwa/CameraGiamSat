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
	function cartDetail()
	{
		$category = Category::all();
		$contact = Contact::all();
    	// $product = Category::where('id_category', 10)->get();
		$slides = DB::select('SELECT category.*, slide.img FROM slide INNER JOIN category ON slide.id_category = category.id');
  //   	var_dump($users);
		return view('index.carts.cart',['category'=>$category, 'contact'=>$contact, 'slides'=>$slides]);
	}

	function news()
	{
		$category = Category::all();
		$contact = Contact::all();
    	// $product = Category::where('id_category', 10)->get();
		$slides = DB::select('SELECT category.*, slide.img FROM slide INNER JOIN category ON slide.id_category = category.id');
  //   	var_dump($users);
		return view('index.news.news',['category'=>$category, 'contact'=>$contact, 'slides'=>$slides]);
	}

	function detailProduct()
	{
		$category = Category::all();
		$contact = Contact::all();
    	// $product = Category::where('id_category', 10)->get();
		$slides = DB::select('SELECT category.*, slide.img FROM slide INNER JOIN category ON slide.id_category = category.id');
  //   	var_dump($users);
		return view('index.product.chitietsanpham',['category'=>$category, 'contact'=>$contact, 'slides'=>$slides]);
	}
    //
	function trangchu(ProductRepository $product_cate)
	{
		$category = Category::all();
		$contact = Contact::all();
    	// $product = Category::where('id_category', 10)->get();
		$slides = DB::select('SELECT category.*, slide.img FROM slide INNER JOIN category ON slide.id_category = category.id');
  //   	var_dump($users);
		return view('index',['category'=>$category, 'contact'=>$contact, 'slides'=>$slides]);
	}
	function category($id_category, $start)
	{

		$category = Category::all();
		$contact = Contact::all();
		$name_cate =  DB::select('SELECT * FROM category WHERE id = ?',[$id_category])[0]->name;
		$menu_left = DB::select('SELECT * FROM category WHERE id_root = ?',[$id_category]);
		$list_product = DB::select('SELECT * FROM product WHERE id_category = ? OR id_category IN (SELECT id FROM category WHERE id_root IN (SELECT id FROM category WHERE id = ? OR id_root IN (SELECT id FROM category WHERE id = ? ))) LIMIT ?,12', [$id_category,$id_category,$id_category, ($start-1)*12]);
		$maxLength = DB::select('SELECT Count(*) as max FROM product WHERE id_category = ? OR id_category IN (SELECT id FROM category WHERE id_root IN (SELECT id FROM category WHERE id = ? OR id_root IN (SELECT id FROM category WHERE id = ? )))', [$id_category,$id_category,$id_category]);
		$page_number = $maxLength%12 !=0 ?  $maxLength%12 + 1 : $maxLength%12;
		return view('index.category.content',['category'=>$category,'contact'=>$contact, 'menu_left'=>$menu_left, 'name_cate'=>$name_cate, 'list_product'=>$list_product, 'page_number'=>$page_number,'page'=>$start, 'id_category'=>$id_category]);
    	// var_dump($list_product);
    	// echo $page_number;
	}
	function trangchu1(ProductRepository $product_cate)
	{
		$category = Category::all();
		$contact = Contact::all();
    	// $product = Category::where('id_category', 10)->get();
		$slides = DB::select('SELECT category.*, slide.img FROM slide INNER JOIN category ON slide.id_category = category.id');
  //   	var_dump($users);
		return view('test',['category'=>$category, 'contact'=>$contact, 'slides'=>$slides]);
	}
}
