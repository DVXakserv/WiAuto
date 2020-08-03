<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests;
use Session;
Session_start();

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(){
    	return view('auth');
    }

    public function show_dashboard(){
    	return view('admin.dashboard');
    }

    public function dashboard(Request $request){
    	$email = $request->email;
    	$password = md5($request->password);
    	$result=DB::table('users')
    	        ->where('email',$email)
    	        
    	        ->first();


    	        if($result){
    	        	 Session::put('name_agence',$result->name_agence);
    	        	 Session::put('id',$result->id);
                    Session::flush();
    	        	return view('admin.dashboard');
    	        }else{
    	        	Session::put('message','Email Or password Invalid');
    	        	return Redirect::to('/admin');
    	        }
    }

    public function all_order_dashboard(){
        $all_order_info=DB::table('order')
                            ->join('product','order.product_id','=','product.product_id')
                             ->get();
        $manage_order=view('admin.dashboard')
           ->with('all_order_info',$all_order_info);    
         return view('Admin.layouts.app')
           ->with('admin.dashboard',$manage_order);  
        // return view('admin.all_category');
    }

    public function logout(){
        auth()->logout();

        return Redirect('/admin');
    }
}
