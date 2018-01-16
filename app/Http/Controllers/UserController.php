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
use Mail;
use DB;
use App\Category;
use App\Product;
use App\UserTemp;
use App\Contact;

class UserController extends Controller
{
	public function getDanhSach(){
		$user = User::all();
		// return view('admin.quanlythanhvien.htmml',['user'=>$user]);
		// var_dump($userz
		return view('admin.danhsachUser',['user'=>$user]);
	}

	public function getThem(){
		return view('admin.danhsachUser');
	}
	public function postThem(Request $request){
		$this->validate($request,[
			'name' => ' required|min:3',
			'email' => 'required|email|unique:users,email',
			'password' => 'required|min:3|max:32',
			'password2'=> 'required|same:password',
			'phone_number'=> 'required|min:10|max:11'

		],[
			'name.required'=> 'Bạn chưa nhập tên người dùng',
			'name.min' => 'Tên người dùng phải ít nhất có 3 ký tự',
			'email.required' => 'Bạn chưa nhập Email',
			'email.email' => 'Không đúng định dạng Email',
			'email.unique'=> 'Email đã tồn tại',
			'password.required' => 'Bạn chưa nhập mật khẩu',
			'password.min' => 'Mật khẩu có ít nhất 3 ký tự',
			'password.max' => 'Mật khẩu tối đa 32 ký tự',
			'password2.required'=>'Bạn chưa nhập mật khẩu',
			'password2.same' =>'Mật khẩu không khớp',
			'phone_number.required' => 'Bạn chưa nhập số điện thoại',
			'phone_number.min' => 'Số điện thoại có ít nhất 10 số',
			'phone_number.max' => 'Số điện thoại tối đa 11 số',
		]);

		$user = new User;
		$user->name = $request->name;
		$user->email = $request->email;
		$user->password = bcrypt($request->password);
		$user->password = $request->name;
		$user->phone_number = $request->phone_number;
		$user->save();
		// echo "ok";
		return redirect('admin/danhsachUser')->with('thongbao','Thêm thành công');
	}
	public function getSua($id){
		//$user = User::where('id',$id)->first();
		$user = User::find($id);
		
		// $user->getId($user);
		echo $id;

		// //$user->delete();	
		// // var_dump($user2);
		//return view('admin.danhsachUser',['user1a'=>$user]);
	}
	public function postSua(Request $request, $id){
		$user = User::find($id);
		$user->active = (int)$request->active;
		$user->save();
		return redirect('admin/danhsachUser')->with('thongbao','Thêm thành công');
	}
	public function updateUser(Request $req){
		// $email = $req->email;
		$password = $req->password;
		$name = $req->name;
		$phone = $req->phone;
		$address_user = $req->address;
		$city = $req->city;

		$user = Auth::user();
		$address = Auth::user()->address;

		$user->name = $name;
		$user->phone_number = $phone;
		if($password!=null) $user->password = bcrypt($password);

		$address->address = $address_user;
		$address->id_thanhpho = $city;

		$user->save();
		$address->save();
		// $req->session()->flash('status', 'Tạo bài viết thành công!');
		return redirect('user/profile')->with('status', 'Cập nhật thành công!');
	}
	public function test(){
		return response()->json(Auth::user()->address()->thanhpho());
	}
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
			if (Auth::attempt(['email' => $req->email, 'password' => $req->password, 'active' => 1])) {
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

				DB::table('user_temp')->where('email', $email)->delete();
				// $res=UserTemp::find($email)->delete();
				$userTemp = new UserTemp();
				$userTemp->email = $email;
				$userTemp->token =$req->_token;
				$userTemp->save();

				$this->sendRegister($req);
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
	public function activeUser($email, $token){
		$user_temp = UserTemp::where('email', $email)->where('token', $token)->first();
		if($user_temp!=null){
			$user = User::where('email', $email)
			->update(['active' => 1]);
			DB::table('user_temp')->where('email', $email)->delete();
			echo "Kích hoạt thành công!";
		}else{
			echo "Phiên đã hết hạn";
		}

	}

	public function sendRegister(Request $req){
		$data = ['name' => $req->name, 'content'=>'Ngon chom', 'email'=> $req->email, 'token'=>$req->_token];
		Mail::send('mail.mailRegister', $data, function ($message) use ($req) {
			$message->from('nguyenwipwa@gmail.com', 'Camera giám sát');
			$message->to($req->email, $req->name);
			$message->subject('Subject');

		});
	}
	public function profileUser(){
		$category = Category::all();
		$contact = Contact::all();
		// $product = Category::where('id_category', 10)->get();
		// $slides = DB::select('SELECT category.*, slide.img FROM slide INNER JOIN category ON slide.id_category = category.id');
		//   	var_dump($users);
		return view('index.user.profile', [ 'category' => $category, 'contact' => $contact]);
	}
    

}
