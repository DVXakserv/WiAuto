<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests;
use Session;
Session_start();

class ParameterController extends Controller
{
    public function index(){
    	return view('page.Admin.parameter');
    }

    public function save_info(Request $request){
    	$data=array();
    	$data['id_info']=$request->id_info;
    	$data['id']=$request->id;
    	$data['name_agence']=$request->name_agence;
    	$data['email_agence']=$request->email_agence;
    	$data['number_mobile']=$request->number_mobile;
    	$data['addresse_agence']=$request->addresse_agence;
    	$data['monnaie_agence']=$request->monnaie_agence;

    	$image=$request->file('logo_agence');
    	if($image){
    		$image_name=str_random(20);
    		$ext=Strtolower($image->getClientOriginalExtension());
    		$image_full_name=$image_name.'.'.$ext;
    		$upload_path='image/';
    		$image_url=$upload_path.$image_full_name;
    		$success=$image->move($upload_path,$image_full_name);
    		if($success){
    			$data['logo_agence']=$image_url;
    			   DB::table('info')->insert($data);
    			   Session::put('message','Information adde successfully!!');
    			   return Redirect::to('/add-parameter');

    			   // echo "<pre>";
    			   // print_r($data);
    			   // echo "</pre>";
    			   // exit();
    		}
    	}

    	$data['logo_agence']='';
    	DB::table('info')->insert($data);
    	Session::put('message','Information added successfully !!');
    	return Redirect::to('/add-parameter');
    }
}
