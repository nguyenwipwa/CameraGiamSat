<?php
namespace App\Repository;
interface AdminRepository{

	public function getListSlider();
	public function getListSalesOff();
	public function getSalesOffByID($id);
	public function saveSalesOff($req);

}

?>