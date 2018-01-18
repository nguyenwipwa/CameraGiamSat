<?php
namespace App\Repository;
interface AdminRepository{

	public function getListSlider();
	public function getListSalesOff();
	public function getSalesOffByID($id);
	public function saveSalesOff($req);
	public function viewCategory($id);
	public function addCategory($req);

}

?>