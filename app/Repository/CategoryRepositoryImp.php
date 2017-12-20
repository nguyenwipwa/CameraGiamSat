<?php
/**
*/
namespace App\Repository;
use App\Repository\CategoryRepository;
use App\Model\Category;

class CategoryRepositoryImp implements CategoryRepository
{
	public function getCategoryByIdToot($id_root){
		$cate = new Category();
		$listCate = $cate->getCategoryByIdToot($id_root);
		// $listCate->push(['selected'=> $id_cate]);
		return $listCate;
	}

}



?>