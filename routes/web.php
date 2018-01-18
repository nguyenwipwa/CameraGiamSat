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

Route::group(['prefix' => '/send'], function () {
	Route::post('/register', ['as' => 'send.register', 'uses' => 'SendMailController@sendRegister']);
});
Route::get('/kiem-tra-don-hang/{code_order}', ['as' => 'check.order', 'uses' => 'PageController@check_order']);
Route::get('/huy-don-hang/{code_order}', ['as' => 'huy.order', 'uses' => 'OrderController@huyDonHang']);

Route::group(['prefix' => '/tin-tuc'], function () {
	Route::get('/', ['as' => 'news', 'uses' => 'PageController@pageNews']);
	Route::get('/chi-tiet/{id}', ['as' => 'news.detail', 'uses' => 'PageController@pageNewsDetail']);
});

Route::group(['prefix' => '/gio-hang'], function () {
	Route::get('/',['as' => 'cartDetail', 'uses' => 'PageController@cartDetail']);
	Route::post('/addCart', ['as' => 'addCart', 'uses' => 'PageController@addCart']);
	Route::get('/deleteCartAll', ['as' => 'deleteCartAll', 'uses' => 'PageController@deleteCartAll']);
	Route::get('/removeCart/{rowId}', ['as' => 'removeCart', 'uses' => 'PageController@removeCart']);
	Route::post('/updateCart', ['as' => 'updateCart', 'uses' => 'PageController@updateCart']);
	Route::get('/thanh-toan', ['as' => 'payment', 'uses' => 'PageController@payment']);
	Route::post('/thanh-toan-khach-hang', ['as' => 'payment.customer', 'uses' => 'PageController@paymentCustomer']);
	Route::post('/thanh-toan', ['as' => 'payment1', 'uses' => 'OrderController@addOrder']);
	Route::post('/get-sale-off', ['as' => 'get.sale.off', 'uses' => 'OrderController@getSaleOff']);
	Route::get('/auth-order/{id_order}/{code_orer}/{token}', ['as' => 'auth.order', 'uses' => 'OrderController@auth_order']);
	Route::get('/paypal/{hd}/{total}', ['as' => 'paypal', 'uses'=>'OrderController@paypal']);
	Route::get('/paypal-success', ['as'=>'paypal.success', function(){
		return view('index.carts.paypal-success');
	}]);

});
Route::group(['prefix' => '/user'], function () {
	Route::get('/test', ['as' => 'test', 'uses' => 'UserController@test']);
	Route::get('/danh-sach-don-hang', ['as' => 'list.order', 'uses' => 'PageController@order_history']);
	Route::get('/profile', ['as' => 'profile', 'uses' => 'UserController@profileUser']);
	Route::get('/active/{email}/{token}', ['as' => 'activeUser', 'uses' => 'UserController@activeUser']);
	Route::get('/logout', ['as' => 'logoutUser', 'uses' => 'UserController@logout']);
	Route::post('/login', ['as' => 'loginUser', 'uses' => 'UserController@login']);
	Route::post('/add', ['as' => 'addUser', 'uses' => 'UserController@addUser']);
	Route::post('/update-user', ['as' => 'update.user', 'uses' => 'UserController@updateUser']);
	Route::get('/a', ['as' => 'a', 'uses' => function(){
		return view('auth.register');
	}

	
	// Route::get('/password/reset/{token}', 'Auth\ResetPasswordController@showResetForm');
]);
	// Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('request');
	Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.sendMail');
	Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('reset');
	Route::post('password/reset', 'Auth\ResetPasswordController@reset');

});

Route::group(['prefix' => '/error'], function () {
	Route::get('/500', function(){ return view('error.500');});


});


Route::group(['prefix' => '/admin'], function () {
	Route::get('/login',['as'=>'loginAdmin', 'uses'=>'AdminController@login']);
	Route::post('/login',['as'=>'login.admin.post', 'uses'=>'UserController@loginAdmin']);


});
Route::get('/themtintuc.html', function() {
	return view('admin.themtintuc');
});
Route::get('/test', 'PageController@trangchu1');

// Route::get('/gio-hang', 'PageController@cartDetail');

Route::get('/news', 'PageController@news');

Route::get('/detail-product/{id}', 'PageController@detailProduct');

Route::get('/category/{id_category}/{start}', 'PageController@category');



Route::get('/abc', function () {
	return "ngon";
});


Route::group(['prefix' => '/admin', 'middleware' => 'admin'], function () {
	Route::get('/', ['as' => 'admin', 'uses' => 'AdminController@pageAdmin']);
	Route::get('/banner.html', ['as' => 'quanlybanner', 'uses' => 'AdminController@pageBanner']);
	Route::get('/banner-form.html/{value}', ['as' => 'add.banner', 'uses' => 'AdminController@pageAddBanner']);
	Route::get('/danhsachmenu.html', ['as' => 'danhsachmenu', 'uses' => 'AdminController@pageMenu']);
	Route::get('/danhsachsanpham.html', ['as' => 'danhsachsanpham', 'uses' => 'AdminController@pageSanPham']);
	Route::get('/themsanpham.html', ['as' => 'themsanpham', 'uses' => 'AdminController@viewThemSanPham']);
	Route::post('/themsanpham.html', ['as' => 'themsanpham', 'uses' => 'AdminController@addSanPham']);
	Route::get('/suasanpham.html/{id}', ['as' => 'suasanpham', 'uses' => 'AdminController@viewSuaSanPham']);
	Route::get('/quanlytintuc.html', ['as' => 'quanlytintuc', 'uses' => 'AdminController@pageTinTuc']);
	Route::post('/themtintuc.html', ['as' => 'themtintuc', 'uses' => 'AdminController@addTinTuc']);
	Route::get('/themtintuc.html', ['as' => 'themtintuc', 'uses' => 'AdminController@viewThemTinTuc']);
	Route::get('/viewsuatintuc.html/{id}', ['as' => 'suatintuc1', 'uses' => 'AdminController@viewSuaTinTuc']);
	Route::post('/suatintuc.html/{id}', ['as' => 'suatintuc', 'uses' => 'AdminController@suaTinTuc']);
	Route::get('/phieugiamgia.html', ['as' => 'phieugiamgia', 'uses' => 'AdminController@pageGiamGia']);
	Route::get('/phieugiamgia-form.html/{id}', ['as' => 'phieugiamgia.form', 'uses' => 'AdminController@pageFormGiamGia']);
	Route::post('/phieugiamgia-form.html', ['as' => 'phieugiamgia.add', 'uses' => 'AdminController@saveSalesOff']);
	Route::get('/danhsachdonhang.html', ['as' => 'danhsachdonhang', 'uses' => 'AdminController@pageDonHang']);
	Route::get('/chitietdonhang.html/{id}', ['as' => 'chitietdonhang', 'uses' => 'AdminController@pageChiTietDonHang']);
	Route::get('/suadonhang.html', ['as' => 'suadonhang', 'uses' => 'AdminController@pageSuaDonHang']);
	Route::get('/form-danh-muc.html/{id}', ['as' => 'edit.category', 'uses' => 'AdminController@pageFormCategory']);
	Route::post('/addCategory', ['as' => 'add.category', 'uses' => 'AdminController@postAddCategory']);
	Route::get('/logout', ['as' => 'logout.admin', 'uses' => 'AdminController@logoutAdmin']);

});
Route::get('/themsanpham.html', function() {
	return view('admin.themsanpham');
});

// Route::get('/suatintuc.html', function(){
// 	return view('admin.suatintuc');
// });
Route::get('/index.html', function () {
	return view('admin.indexadmin');
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
