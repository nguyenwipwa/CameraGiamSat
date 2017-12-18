<?php
/**
*/
namespace App\Repository;
use App\Repository\OrderRepository;
use App\Model\Order;

class OrderRepositoryImp implements OrderRepository
{
	
	public function getListOrderByIdUser($id_user)
	{
		return Order::where('id_user', $id_user)->get();
	}

	public function checkOrderByCodeOrder($id_code){
		return Order::where('code_order', $id_code)->get();

	}
}



?>