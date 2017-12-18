<?php
/**
*/
namespace App\Repository;
use App\Repository\OrderRepository;
use App\Model\Order;

class OrderRepositoryImp implements OrderRepository
{
	
	// function __construct(argument)
	// {
	// 	# code...
	// }
	public function getListOrderByIdUser($id_user)
	{
		return Order::where('id_user', $id_user)->get();
	}
}



?>