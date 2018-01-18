<?php
/**
*/
namespace App\Repository;
use App\Repository\AdminRepository;
use App\Model\Slider;
use App\Model\SaleOff;
use App\Model\Category;

class AdminRepositoryImp implements AdminRepository
{
	public function addCategory($req){
		try {
			if($req->id == 0)
				$cate = new Category();
			else
				$cate = Category::where('id', $req->id)->first();
			$cate->name = $req->name;
			$cate->id_root = $req->id_root;
			$cate->status = bindec($req->status);
			$cate->icon = basename($req->icon);
			$cate->save();
			return true;
		} catch (Exception $e) {
			return false;
		}

	}
	public function viewCategory($id){
		$cate = Category::where('id', $id)->first();
		$listCate = Category::where('id_root','0')->get();
		return view('admin.danhmuc.form-danhmuc',['cate'=>$cate, 'listCate'=>$listCate]);
	}
	public function getListSlider(){
		return Slider::getListSlider();
	}
	public function getListSalesOff(){
		return SaleOff::getListSalesOff();
	}
	public function getSalesOffByID($id){
		return SaleOff::getSalesOffByID($id);
	}
	public function saveSalesOff($req){
		$saleOff = new SaleOff();
		$saleOff->id = $req->id;
		if($req->id !=0) $saleOff = SaleOff::getSalesOffByID($req->id);
			$saleOff->title = $req->title;
			$saleOff->key = $req->key;
			$saleOff->percent = $req->discount;
			$saleOff->status = bindec($req->status);
			$saleOff->number = $req->number;
			try {
				$saleOff->save();
				return $saleOff;
			} catch (Exception $e) {
				return null;
			}
		}
		
	}

	?>