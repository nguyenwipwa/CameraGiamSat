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

Route::get('/', function () {
	return view('index');
});

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