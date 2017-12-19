<?php
namespace App\Repository;
interface OrderRepository{

	public function getListOrderByIdUser($id_user);
	public function checkOrderByCodeOrder($id_code);
	public function addOrder($req);
	public function huyDonHang($code_order);
}

?>