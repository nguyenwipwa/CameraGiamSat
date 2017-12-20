<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use Mail;
use Cart;
class SendMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public static function sendOrder($req, $auth_order){
        $data = ['name' => $req->fullname, 'content'=>'Ngon chom', 'email'=> $req->email, 'listCart'=>Cart::content(), 'auth_order'=> $auth_order];
        Mail::send('mail.mailOrder', $data, function ($message) use ($req) {
            $message->from('nguyenwipwa@gmail.com', 'Camera giám sát');
            $message->to($req->email, $req->fullname);
            $message->subject('Subject');

        });
    }

    public static function sendRegister(Request $req){
        $data = ['name' => $req->name, 'content'=>'Ngon chom', 'email'=> $req->email, 'token'=>$req->_token];
        Mail::send('mail.mailRegister', $data, function ($message) use ($req) {
            $message->from('nguyenwipwa@gmail.com', 'Camera giám sát');
            $message->to($req->email, $req->name);
            $message->subject('Subject');

        });
    }
}
