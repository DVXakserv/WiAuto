<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests;
use Session;
session_start();

class LogoutController extends Controller
{
    public function logout(){
    	Session::put('admin_name',null);
    	Session::put('admin_id',null);
    	return Redirect::to('/');
    }
}
