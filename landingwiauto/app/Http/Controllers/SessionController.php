<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionController extends Controller
{
    public function create(){
    	return view('Admin.login');
    }

    public function store(){
    	if(! auth()->attempt(request(['email','password']))){
    		return back()->withErrors(['message'=>'Email or password not correct',]);
    	}
    	return Redirect('/admin');
    }
}
