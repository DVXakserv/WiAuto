<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controllers;
use Sentinel;
use Mail;
use Reminder;
use App\User;
use Mail;

class ForgetPasswordController extends Controller
{
    public function forget(){
    	return view('auth.reset');
    }

    public function password(Request $request){
    	$user = User::whereEmail($request->email)->first();
    	if(count($user) == 0){
    		return redirect()->back()->with(['error'=>'Email Not Exists']);
    	}
    	$user = Sentinel::findById($user->id);
    	$reminder = Reminder::exists($user) ? : Reminder::create($user);
    	$this->sendEmail($user, $reminder->code);
    	return redirect()->back()->with(['success'=>'Reste Code Sent To your email.']);
    }

    public function sendEmail($user , $code){
    	Mail::send(
    		'email.forget',
    		['user' => $user, 'code' => $code],
    		function($message) use ($user){
    			$message->to($user->email);
    			$message->subject(" $user->name, Reste Your Password.");
    		}
    	);
    }
}
