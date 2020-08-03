<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMail;
use Session;
Session_start();

class SendEmailController extends Controller
{
    public function index(){
    	return view('Wiauto.contact');
    }

    public function send(Request $request){
    	$this->validate($request, [
    		'email'     =>        'required|email',
    		'subject'   =>        'min:3',
    		'message'   =>        'min:10'
    	]);
    	$data = array(
    		'message' => $request->message,
    		'subject' => $request->subject,
    		'message' => $request->message
    	);

    	Mail::to('emails.contact', $data, function($message) use ($data){
    		$message->to($data['email']);
    		$message->Subject($data['Welcome To laravel']);
    		$message->from('suissy23@gmail.com');
    	});
    	session::falsh('success',"Congrats! Mail Sent Successfully!");
    	return Redirect::to('/wiauto.contact');
    }
}
