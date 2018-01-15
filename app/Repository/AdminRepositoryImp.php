<?php
/**
*/
namespace App\Repository;
use App\Repository\AdminRepository;
use App\Model\Slider;
use App\Model\SaleOff;

class AdminRepositoryImp implements AdminRepository
{
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