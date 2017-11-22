<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Hash;
use App\User;
use App\Address;
use App\Services\PayUService\Exception;
class UserController extends Controller
{

	public function addUser(Request $req) {
		$name = $req->name;
		$email = $req->email;
		$password =  encrypt($req->password);
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
			echo $user->id;
		} catch (\Illuminate\Database\QueryException $e) {
			echo "Lỗi";
		}
		
		//Them address
		
		
		 // $decrypted = decrypt($password);
    // $id = Company::create($input)->id;

	}
    //
}
