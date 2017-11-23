<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Mail;
use App\Mail\SendMail;
class SendMailController extends Controller
{
    //
    public function sendRegister(Request $req){
    	Mail::to('Nguyenwipwa@gmail.com')->send(new SendMail($data));
        echo "Đã xong";
    }
}
