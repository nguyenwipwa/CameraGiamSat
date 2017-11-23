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

Route::get('/', ['as' => '/', 'uses' => 'PageController@trangchu']);

Route::get('/search-product', ['as' => 'search', 'uses' => 'PageController@searchProduct']);

Route::get('/search-ajax/{key}', ['as' => 'search-ajax', 'uses' => 'PageController@searchAjax']);

Route::group(['prefix' => '/gio-hang'], function () {
	Route::get('/',['as' => 'cartDetail', 'uses' => 'PageController@cartDetail']);
	Route::post('/addCart', ['as' => 'addCart', 'uses' => 'PageController@addCart']);
	Route::get('/deleteCartAll', ['as' => 'deleteCartAll', 'uses' => 'PageController@deleteCartAll']);
	Route::get('/removeCart/{rowId}', ['as' => 'removeCart', 'uses' => 'PageController@removeCart']);
	Route::post('/updateCart', ['as' => 'updateCart', 'uses' => 'PageController@updateCart']);
	Route::get('/thanh-toan', ['as' => 'payment', 'uses' => 'PageController@payment']);


});
Route::group(['prefix' => '/user'], function () {
	Route::get('/logout', ['as' => 'logoutUser', 'uses' => 'UserController@logout']);
	Route::post('/login', ['as' => 'loginUser', 'uses' => 'UserController@login']);
	Route::post('/add', ['as' => 'addUser', 'uses' => 'UserController@addUser']);
	Route::post('/modifier', ['as' => 'updateCart', 'uses' => 'UserController@updateCart']);
	Route::get('/a', ['as' => 'a', 'uses' => function(){
		return view('auth.register');
	}
]);


});

Route::group(['prefix' => '/error'], function () {
	Route::get('/500', function(){ return view('error.500');});


});


Route::group(['prefix' => '/admin'], function () {
	Route::get('/login', 'AdminController@login');

});

Route::get('/test', 'PageController@trangchu1');

// Route::get('/gio-hang', 'PageController@cartDetail');

Route::get('/news', 'PageController@news');

Route::get('/detail-product/{id}', 'PageController@detailProduct');

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

Route::get('/model/query', function () {
	$user = App\User::find(1);
	echo $user->name;
});
Route::get('model/category', function () {
	$category = App\Category::all()->toJson();
	echo $category;
});
Route::get('model/category/ten', function () {
	$category = App\Category::where('id', 10)->get()->toArray();
	var_dump($category);
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
