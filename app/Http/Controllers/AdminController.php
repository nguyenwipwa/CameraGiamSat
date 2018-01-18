<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repository\CategoryRepositoryImp;

use App\Model\Category;
use App\Model\Product;
use App\Model\News;
use App\Model\NewsDetail;
use App\Model\OrderDetail;
use App\Model\Order;
use App\Model\Process;
use App\User;
use App\ThanhPho;
use Illuminate\Support\Facades\Session;
use DB;
use App\Repository\AdminRepository;
use Auth;
class AdminController extends Controller
{
	function deleteGiamGia(Request $req){
		$arr = $req->selected;
		$key = DB::table('sales_off')->whereIn('id', $arr);
		try {
			$key->delete();
			return redirect(route('phieugiamgia'))->with('status', 'Xóa thành công');
		} catch (\Illuminate\Database\QueryException $e) {
			return redirect(route('phieugiamgia'))->with('error', 'Xóa thất bại');
		}
	}
	function logoutAdmin(){
		Auth::logout();
		return redirect(route('loginAdmin'));
	}
	function postAddCategory(Request $req, AdminRepository $rep){
		if($rep->addCategory($req))
			return redirect(route('danhsachmenu'))->with('status', 'Thao tác thành công!');
		else
			return redirect(route('danhsachmenu'))->with('status', 'Không thêm được!');;
	}
	function pageFormCategory($id, AdminRepository $rep){
		return $rep->viewCategory($id);

	}
    //
	function saveSalesOff(AdminRepository $rep,Request $req){
		$saleOff = $rep->saveSalesOff($req);
		return redirect(route('phieugiamgia'))->with('status', 'Thao tác thành công!');
    	// return json_encode();
	}
	function pageFormGiamGia(AdminRepository $rep, $id){
		$saleOff = $rep->getSalesOffByID($id);
		return view('admin.giamgia.form-giamgia', ['saleOff'=>$saleOff]);
	}
	function pageGiamGia(AdminRepository $rep){
		$listSalesOff = $rep->getListSalesOff();
		return view('admin.giamgia.giamgia',['listSalesOff'=>$listSalesOff]);

	}
	function pageBanner(AdminRepository $rep){
		$listSlider = $rep->getListSlider();
		return view('admin.banner.banner', ['listSlider'=> $listSlider]);
	}
	function pageAddBanner($value, AdminRepository $rep){
		$listSlider = $rep->getListSlider()->where('layout', $value);
		return view('admin.banner.form-banner',  ['listSlider'=> $listSlider]);
	}
	function login(Request $req)
	{
		return view('admin.login');
	}

	function pageAdmin()
	{
		return view('admin.indexadmin');
	}

	function pageMenu(){
		$cate = new Category();
		$listCate = $cate->getCategoryAdmin();
		// return json_encode($listCate);
		return view('admin.danhsachmenu', ['listCate'=>$listCate]);
	}

	function pageSanPham()
	{
		$product = new Product();
		$listProduct = $product->getProductAll();
		return view('admin.danhsachsanpham', ['listProduct'=>$listProduct]);
	}
	function viewThemSanPham(CategoryRepositoryImp $categoryRepositoryImp){
		$id_cate = 3;
		$listCate = $categoryRepositoryImp->getCategoryByIdToot(0); //Thằng này dùng query map thì nó ra Collection lên mạng search Collection laravel là biết. Có đủ hàm chứ k phải mảng như hầu a nói.vkl. K phải mảng nhé...quất thử coi ra cái gì. Chừng mà có search thì search Collection là ok. chứ mảng là phải xài như $listcate["id_root"] đúng k? Nó giống mảng thâu, nhưng nó là Collection. ừa a chưa nghiên cứu, để mai. h quất cmnd
		// return json_encode($listCate);
		return view('admin.themsanpham', ['listCate' => $listCate, 'selected'=> $id_cate]);
	}

	function addSanPham(Request $request){
		if($request->id==0)
			$product = new Product();
		else
			$product = Product::where('id', $request->id)->first();
		$product->name = $request->name;
		$product->digital = $request->digital;
		$product->id_provider = $request->provider;
		$product->id_category = $request->cate;
		$product->detail_product = $request->detail_product;
		$product->quatity = $request->quatity;
		$product->status = (int)$request->status;
		$product->name = $request->name;
		$status = $request->cate;

		if($request->file('fImage')!=null)
		{
			$file_name = $request->file('fImage')->getClientOriginalName();
			$request->file('fImage')->move('public/images/san-pham/', $file_name);
		}
		else
			$file_name = $product->img;
		$product->img = $file_name;
		$product->save();
		return redirect()->route('danhsachsanpham');

	}
	function viewSuaSanPham($id, CategoryRepositoryImp $categoryRepositoryImp){
		$product = (object)Product::find($id);
		$id_cate = 3;
		$listCate = $categoryRepositoryImp->getCategoryByIdToot(0); 
		return view('admin.suasanpham',['product'=>$product,'listCate' => $listCate,'selected'=> $id_cate]);

	}
	function pageTinTuc(){
		$news = new News();
		$listNews = $news->getNewsAdminAll();
		return view('admin.quanlytintuc', ['listNews'=>$listNews]);
	}
	function addTinTuc(Request $request){
		$file_name = $request->file('fImage')->getClientOriginalName();
		$news = new News();
		$news->title = $request->title;
		$news->img = $file_name;
		$news->decription = $request->description;
		$request->file('fImage')->move('public/images/tin-tuc/', $file_name);
		$news->save();
		// echo $news;
		$new_dicription = new NewsDetail();
		$new_dicription->id_news = $news->id;
		$new_dicription->content = $request->content;
		$new_dicription->save();
		Session::flash('message', 'Thêm thành công');
		return redirect()->route('quanlytintuc');
		

		// ->with(['flash_level'=>'success','flash_message'=>'Thêm thành công!']);
	}
	function viewThemTinTuc(){
		return view('admin.themtintuc');
	}
	function viewSuaTinTuc($id){
		// echo $id;
		$news  = News::find($id);
		$news_descrip = DB::select('SELECT * from news_decription where id_news ='.$id)[0];
		
		return view('admin.suatintuc',['news'=>$news,'news_descrip'=>$news_descrip]);
	}
	function suaTinTuc($id, Request $request){
		// echo $id;
		// $file_name;
		$news = News::find($id);
		
		$news->title = $request->title;
		// if($request->file('fImage')->getClientOriginalName() == null ){
		// 	$file_name = $request->fImage;	
		// }
		// else{
		// 	$file_name = $request->file('fImage')->getClientOriginalName();
		// 	$request->file('fImage')->move('public/images/tin-tuc/', $file_name);
	// }
		// $news->img = $file_name;
		$news->decription = $request->description;
		$news->save();
		$ngon = NewsDetail::where('id_news', $id)
		->update(['content' => $request->content]);
		// echo json_encode($user);
		return $this->pageTinTuc();
	}
	function pageDonHang(){
		

		$listOrders =  Order::all();
		// return json_encode($listOrders[0]->getListOrderDetailMapping[0]->unit_price);
		// echo $ngon;
		// json_encode($name);

		return view('admin.danhsachdonhang', ['listOrders'=>$listOrders]);
	}
	function pageChiTietDonHang($id){
		$order = Order::find($id);

		$order_detail = (object)OrderDetail::where('id_order',$order->id)->get()->toArray()[0];
		$list_detail = OrderDetail::where('id_order', $id)->get();
		$process = (object)Process::where('id', $order->id_process)->select('process', 'info')->get()->toArray()[0];
		// var_dump($process->process);
		$user = (object)User::where('id',$order->id_user)->get()->toArray()[0];
		$key = $order->getSalesOff();
		
		return view('admin.chitietdonhang',['order'=>$order, 'order_detail'=>$order_detail,'list_detail'=>$list_detail,'process'=>$process,'user'=>$user,'key'=>$key]);
	}
	function pageSuaDonHang($id){
		$order = Order::find($id);

		$order_detail = (object)OrderDetail::where('id_order',$order->id)->get()->toArray()[0];
		$product = (object)DB::select('SELECT * FROM product where id = ?',[$order_detail->id_product])[0];
		$process = Process::all();
		// var_dump($process->process);
		$user = (object)User::where('id',$order->id_user)->get()->toArray()[0];
		// $id = 
		$id = (object)DB::select('SELECT id_thanhpho FROM address WHERE id_user  = ?' ,[$user->id])[0];
		$thanhpho =(object)DB::select('SELECT name FROM thanhpho where id = ?',[$id->id_thanhpho])[0];
		$allproduct = Product::all();
		$process2 = (object)Process::where('id', $order->id_process)->select('id','process', 'info')->get()->toArray()[0];
		// echo $id->id_thanhpho;
		// var_dump($id);


		return view('admin.suadonhang',['order'=>$order, 'order_detail'=>$order_detail,'product'=>$product,'process'=>$process,'process2'=>$process2,'user'=>$user,'thanhpho'=>$thanhpho, 'allproduct'=>$allproduct]);
	}
	function suaDonHang($id, Request $request){
		// $order = Order::find($id);
		// $order->code_order = $request->code_order;
		// $order->name_customer = $request->firstname;
		// $order->id_process = $request->process;
		// $order->save();

		// $order_detail = OrderDetail::find($id);
		// echo $request->code_order;

		// var_dump($order);
		$order = DB::table('order')
		->where('id', $id)
		->update(['id_process' => $request->process]);
		// echo $request->process;
		// echo $id;
		return redirect()->back();
	}
}
