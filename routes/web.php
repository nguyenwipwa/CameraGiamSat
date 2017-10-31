<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
 */

Route::group(['prefix'=>'/'], function()
{
	Route::get('/','PageController@trangchu' );

});


Route::get('/category/{id_category}/{start}', 'PageController@category');


Route::get('/abc', function () {
	return "ngon";
});
Route::get('/admin', function () {
	return view('admin.indexadmin');
});
Route::get('/index.html', function () {
	return view('admin.indexadmin');
});
Route::get('/danhsachmenu.html', function () {
	return view('admin.danhsachmenu');
});
Route::get('/danhsachsanpham.html', function () {
	return view('admin.danhsachsanpham');
});
Route::get('/hoadon.html', function () {
	return view('admin.hoadon');
});
Route::get('/quanlythanhvien.html', function () {
	return view('admin.quanlythanhvien');
});
Route::get('/tkdoanhthu.html', function () {
	return view('admin.tkdoanhthu');
});
Route::get('/tkspbanchay.html', function () {
	return view('admin.tkspbanchay');
});
// danhsachsanpham-khuyenmai
Route::get('/danhsachsanpham-khuyenmai.html', function () {
	return view('admin.danhsachsanpham-khuyenmai');
});

Route::get('/model/save', function () {
	$user = new App\User();
	$user->name = "Mai";
	$user->email = "Nguyenwipwa@gmail.com";
	$user->password = "Mat khau";

	$user->save();
	echo "Đã Thực hiện save";
});

Route::get('/model/query', function(){
	$user = App\User::find(1);
	echo $user->name;
});
Route::get('model/category', function(){
	$category = App\Category::all()->toJson();
	echo $category;
});
Route::get('model/category/ten', function(){
	$category = App\Category::where('id', 10)->get()->toArray();
	var_dump($category);
});

