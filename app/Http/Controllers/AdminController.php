<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Category;
use App\Model\Product;
use App\Model\News;
use App\Model\NewsDetail;
use Illuminate\Support\Facades\Session;
use DB;
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

	function pageSanPham()
	{
		$product = new Product();
		$listProduct = $product->getProductAll();
		return view('admin.danhsachsanpham', ['listProduct'=>$listProduct]);
	}
	function pageTinTuc(){
		$news = new News();
		$listNews = $news->getNewsAdminAll();
		return view('admin.quanlytintuc', ['listNews'=>$listNews]);
	}
	function addTinTuc(Request $request){
		$file_name = $request->file('fImage')->getClientOriginalName();
		$news = new News();
		$news->title = $request->title;
		$news->img = $file_name;
		$news->decription = $request->description;
		$request->file('fImage')->move('public/images/tin-tuc/', $file_name);
		$news->save();
		// echo $news;
		$new_dicription = new NewsDetail();
		$new_dicription->id_news = $news->id;
		$new_dicription->content = $request->content;
		$new_dicription->save();
		Session::flash('message', 'Thêm thành công');
		return redirect()->route('quanlytintuc');
		// ->with(['flash_level'=>'success','flash_message'=>'Thêm thành công!']);
	}
	function viewThemTinTuc(){
		return view('admin.themtintuc');
	}
	function viewSuaTinTuc($id){
		// echo $id;
		$news  = News::find($id);
		$news_descrip = DB::select('SELECT * from news_decription where id_news ='.$id)[0];
		
		return view('admin.suatintuc',['news'=>$news,'news_descrip'=>$news_descrip]);
	}
	function suaTinTuc($id, Request $request){
		// echo $id;
		// $file_name;
		$news = News::find($id);
		
		$news->title = $request->title;
		// if($request->file('fImage')->getClientOriginalName() == null ){
		// 	$file_name = $request->fImage;	
		// }
		// else{
		// 	$file_name = $request->file('fImage')->getClientOriginalName();
		// 	$request->file('fImage')->move('public/images/tin-tuc/', $file_name);
	// }
		// $news->img = $file_name;
	$news->decription = $request->description;
	$news->save();
	$ngon = NewsDetail::where('id_news', $id)
	->update(['content' => $request->content]);
		// echo json_encode($user);
	return $this->pageTinTuc();
}
}
