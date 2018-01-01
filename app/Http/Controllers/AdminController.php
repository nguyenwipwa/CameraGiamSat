<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Category;
use App\Model\Product;
use App\Model\News;
use App\Repository\AdminRepository;
class AdminController extends Controller
{
    //
    function saveSalesOff(AdminRepository $rep,Request $req){
    	$saleOff = $rep->saveSalesOff($req);
    	return redirect(route('phieugiamgia'))->with('status', 'Thao tác thành công!');
    	// return json_encode();
    }
	function pageFormGiamGia(AdminRepository $rep, $id){
		$saleOff = $rep->getSalesOffByID($id);
		return view('admin.giamgia.form-giamgia', ['saleOff'=>$saleOff]);
	}
	function pageGiamGia(AdminRepository $rep){
		$listSalesOff = $rep->getListSalesOff();
		return view('admin.giamgia.giamgia',['listSalesOff'=>$listSalesOff]);

	}
	function pageBanner(AdminRepository $rep){
		$listSlider = $rep->getListSlider();
		return view('admin.banner.banner', ['listSlider'=> $listSlider]);
	}
	function pageAddBanner($value, AdminRepository $rep){
		$listSlider = $rep->getListSlider()->where('layout', $value);
		return view('admin.banner.form-banner',  ['listSlider'=> $listSlider]);
	}
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

}
