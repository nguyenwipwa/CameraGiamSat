<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use App\Model\News;
use DB;
class NewsDetail extends Model
{
    //
	protected $table = "news_decription";
	public $timestamps = false;
	public function getNewDetail($id_news){
		$news = DB::select('SELECT * from news_decription nd INNER JOIN  news n ON nd.id_news = n.id where id_news = ?', [$id_news])[0];
		$this->updateView($id_news, $news->view_number);
		// $news = new News();
		// $newId = $news->getNewsById($id_news);
		// return ['news' => $newId, 'newsDetail' => $this::where('id_news', $id_news)->first()];
		return $news;
	}
	private function updateView($id_news, $view){
		$user = News::where('id', $id_news)
		->update(['view_number' => $view+1]);
	}

	// public function news()
	// {
	// 	return $this->hasOne('App\Model\NewsDetail', 'id_news');
	// }
}
