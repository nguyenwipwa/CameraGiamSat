<?php
/**
*/
namespace App\Repository;
use App\Repository\AdminRepository;
use App\Model\Slider;

class AdminRepositoryImp implements AdminRepository
{
	public function getListSlider(){
		return Slider::getListSlider();
	}
	
}



?>