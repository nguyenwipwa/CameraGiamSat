<?php

namespace App\Http\Controllers;
use App\Category;
use App\Contact;
use App\ThanhPho;
use App\Http\Controllers\Controller;
use App\Product;
use App\Provider;
use App\Repository\ProductRepository;
use DB;
use Illuminate\Http\Request;
use Cart;
class PageController extends Controller {

	function payment() {
		

		$category = Category::all();
		$contact = Contact::all();
		$thanhPho = ThanhPho::all();
		// $product = Category::where('id_category', 10)->get();
		$slides = DB::select('SELECT category.*, slide.img FROM slide INNER JOIN category ON slide.id_category = category.id');
		//   	var_dump($users);

		// Cart::add('293ad', 'Product 1', 1, 9.99, ['img'=> 'ngon']);
		// $list_cart = Cart::content();
		return view('index.carts.payment', ['category' => $category, 'contact' => $contact, 'slides' => $slides, 'thanhPho'=> $thanhPho]);
		// echo json_encode(Cart::content());
	}

	function updateCart(Request $request){
		$list_cart = Cart::content();
		// echo json_encode($request->all());
		// echo json_encode($list_cart);
		foreach ($list_cart as $key) {
			$rowId = $key->rowId;
			$list_cart[$rowId]->qty =  $request->$rowId;
		}
		return redirect()->route('cartDetail');
	}

	function removeCart($rowId){
		Cart::remove($rowId);
		return redirect()->route('cartDetail');
		// echo $rowId;
	}
	function deleteCartAll(){
		Cart::destroy();
		return redirect()->route('cartDetail');
	}

	function addCart(Request $request){
		$id = $request->id;
		$name = $request->name;
		$qty = $request->qty;
		$price = $request->price;
		$img = $request->img;
		Cart::add($id, $name, $qty, $price, ['img'=> $img]);
		return redirect()->route('cartDetail');
	}

	function cartDetail() {
		

		$category = Category::all();
		$contact = Contact::all();
		// $product = Category::where('id_category', 10)->get();
		$slides = DB::select('SELECT category.*, slide.img FROM slide INNER JOIN category ON slide.id_category = category.id');
		//   	var_dump($users);

		// Cart::add('293ad', 'Product 1', 1, 9.99, ['img'=> 'ngon']);
		// $list_cart = Cart::content();
		return view('index.carts.cart', ['category' => $category, 'contact' => $contact, 'slides' => $slides]);
		// echo json_encode(Cart::content());
	}
	///search
	function searchProduct(Request $request) {
		$category = Category::all();
		$contact = Contact::all();
		// $product = Category::where('id_category', 10)->get();
		// $slides = DB::select('SELECT category.*, slide.img FROM slide INNER JOIN category ON slide.id_category = category.id');
		//   	var_dump($users);
		$product = Product::where('name', 'like', '%' . $request->key . '%')->paginate(12);
		$product->withPath('search-product?key=' . $request->key);
		return view('index.search.search', ['product' => $product, 'category' => $category, 'contact' => $contact]);
		// var_dump($product);
		// echo $request->key;
	}
	function searchAjax($key) {
		$product = DB::select('SELECT id, name, price, img from product where name like "%' . $key . '%" limit 10');
		echo json_encode(['message' => $product]);
	}
	function news() {
		$category = Category::all();
		$contact = Contact::all();
		// $product = Category::where('id_category', 10)->get();
		$slides = DB::select('SELECT category.*, slide.img FROM slide INNER JOIN category ON slide.id_category = category.id');
		//   	var_dump($users);
		return view('index.news.news', ['category' => $category, 'contact' => $contact, 'slides' => $slides]);
	}

//chitietsanpham
	function detailProduct($id) {
		$category = Category::all();
		$contact = Contact::all();
		// $product = Category::where('id_category', 10)->get();
		$slides = DB::select('SELECT category.*, slide.img FROM slide INNER JOIN category ON slide.id_category = category.id');
		$product = DB::select('SELECT * from product where id = ?', [$id])[0];
		$sanpham = DB::select('SELECT product.id, product.name, product.price, product.img from product join category on product.id_category = category.id where category.id = ? limit 10', [$product->id_category]);
		$random = DB::select('SELECT product.name, product.price, product.id, product.img from product order by rand() limit 3');
		// var_dump($sanpham);
		//   	var_dump($users);
		// $thuonghieu = DB::select('SELECT * FROM provider where id = ?', [$product->id_provider])[0];
		$thuonghieu = Provider::where('id', $product->id_provider)->first();
		return view('index.product.chitietsanpham', ['category' => $category, 'contact' => $contact, 'slides' => $slides, 'product' => $product, 'sanpham' => $sanpham, 'random' => $random, 'thuonghieu' => $thuonghieu]);
		// echo $id;
		// var_dump($thuonghieu);
	}

	//
	function trangchu(ProductRepository $product_cate) {
		$category = Category::all();
		$contact = Contact::all();
		// $product = Category::where('id_category', 10)->get();
		$slides = DB::select('SELECT category.*, slide.img FROM slide INNER JOIN category ON slide.id_category = category.id');
		//   	var_dump($users);
		return view('index', ['category' => $category, 'contact' => $contact, 'slides' => $slides]);
	}
	function category($id_category, $start) {

		$category = Category::all();
		$contact = Contact::all();
		$name_cate = DB::select('SELECT * FROM category WHERE id = ?', [$id_category])[0]->name;
		$menu_left = DB::select('SELECT * FROM category WHERE id_root = ?', [$id_category]);
		$list_product = DB::select('SELECT * FROM product WHERE id_category = ? OR id_category IN (SELECT id FROM category WHERE id_root IN (SELECT id FROM category WHERE id = ? OR id_root IN (SELECT id FROM category WHERE id = ? ))) LIMIT ?,12', [$id_category, $id_category, $id_category, ($start - 1) * 12]);
		$maxLength = DB::select('SELECT Count(*) as max FROM product WHERE id_category = ? OR id_category IN (SELECT id FROM category WHERE id_root IN (SELECT id FROM category WHERE id = ? OR id_root IN (SELECT id FROM category WHERE id = ? )))', [$id_category, $id_category, $id_category]);
		$page_number = $maxLength % 12 != 0 ? $maxLength % 12 + 1 : $maxLength % 12;
		return view('index.category.content', ['category' => $category, 'contact' => $contact, 'menu_left' => $menu_left, 'name_cate' => $name_cate, 'list_product' => $list_product, 'page_number' => $page_number, 'page' => $start, 'id_category' => $id_category]);
		// var_dump($list_product);
		// echo $page_number;
	}
	function trangchu1(ProductRepository $product_cate) {
		$category = Category::all();
		$contact = Contact::all();
		// $product = Category::where('id_category', 10)->get();
		$slides = DB::select('SELECT category.*, slide.img FROM slide INNER JOIN category ON slide.id_category = category.id');
		//   	var_dump($users);
		return view('test', ['category' => $category, 'contact' => $contact, 'slides' => $slides]);
	}
}
