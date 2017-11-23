<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Hash;
use App\User;
use App\Address;
use App\Services\PayUService\Exception;
use Auth;
use Validator;
class UserController extends Controller
{
	public function logout(){
		Auth::logout();
		return redirect()->route('/');
	}
	public function login(Request $req){
		$validator = Validator::make($req->all(),
			[
				'email' => 'required|email',
				'password' => 'required',
			],
			[
				'email.required' => 'Bạn chưa nhập Email',
				'email.email' => 'Bạn chưa nhập đúng email',
				'password.required' => 'Bạn chưa nhập mật khẩu',
			]
		);
		if ($validator->passes()) {
			if (Auth::attempt(['email' => $req->email, 'password' => $req->password])) {
            // Authentication passed...
				return response()->json(['success'=>'Đăng nhập thành công']);
			}else{
				return response()->json(['error'=>['Tài khoản hoặc mật khẩu sai']]);
			}
		}
		return response()->json(['error'=>$validator->errors()->all()]);
		
	}

	public function addUser(Request $req) {
		$validator = Validator::make($req->all(), 
			['name' => 'required|min:3',
			'email' => 'required|email|unique:users,email',
			'password' => 'required|min:6|max:32',
			'passwordAgain' => 'required|same:password'
		],
		['name.required' => 'Bạn chưa nhập tên người dùng',
		'name.min' => 	'Tên người dùng ít nhất 3 ký tự',
		'email.required' => 'Bạn chưa nhập Email',
		'email.email' => 'Bạn chưa nhập đúng email',
		'email.unique' => 'Email đã tồn tại',
		'password.required' => 'Bạn chưa nhập mật khẩu',
		'password.min' => 'Mật khẩu ít nhất 6 ký tự',
		'password.max' => 'Mật khẩu tối đa 32 ký tự',
		'passwordAgain.required' => 'Bạn chưa nhập lại mật khẩu',
		'passwordAgain.same' => 'Mật khẩu nhập chưa đúng'

	]);

		if ($validator->passes()) {
			$name = $req->name;
			$email = $req->email;
			$password =  bcrypt($req->password);
			$user = new User();
			$user->password = $password;
			$user->email = $email;
			$user->name = $name;
			$user->id_role = '1';
			$user->phone_number = $req->numberPhone;
			try {
				$user->save();
				$address = new Address();
				$address->id_user = $user->id;
				$address->address = $req->address;
				$address->id_thanhpho = $req->id_tp;
				$address->save();
				return response()->json(['success'=>'Đăng ký thành công.']);
			} catch (\Illuminate\Database\QueryException $e) {
				return redirect('/error/500');
			}

		}

		return response()->json(['error'=>$validator->errors()->all()]);
		
		
		//Them address
		
		
		 // $decrypted = decrypt($password);
    // $id = Company::create($input)->id;

	}
    //
}
