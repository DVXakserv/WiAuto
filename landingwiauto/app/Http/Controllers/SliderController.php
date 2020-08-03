<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests;
use Session;
Session_start();

class SliderController extends Controller
{
	public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(){
    	return view('page.admin.add_slider');
    }

    public function all_slider(){
    	$all_slider_info=DB::table('slider')->get();
    	$manage_slider=view('page.admin.all_slider')
    	   ->with('all_slider_info',$all_slider_info);	
    	 return view('page.Admin.layouts.app')
    	   ->with('admin.all_slider',$manage_slider);  
    	// return view('admin.all_category');
    }

    public function save_slider(Request $request){
    	$data=array();
    	$data['id_slider']=$request->id_slider;
        $data['id']=$request->id;
    	$data['slider_description']=$request->slider_description;
    	$data['publication_status']=$request->publication_status;

    	$image=$request->file('slider_image');
    	if($image){
    		$image_name=str_random(20);
    		$ext=Strtolower($image->getClientOriginalExtension());
    		$image_full_name=$image_name.'.'.$ext;
    		$upload_path='slider/';
    		$image_url=$upload_path.$image_full_name;
    		$success=$image->move($upload_path,$image_full_name);
    		if($success){
    			$data['slider_image']=$image_url;
    			   DB::table('slider')->insert($data);
    			   Session::put('message','slider adde successfully!!');
    			   return Redirect::to('/add-slider');

    			   // echo "<pre>";
    			   // print_r($data);
    			   // echo "</pre>";
    			   // exit();
    		}
    	}

    	$data['slider_image']='';
    	DB::table('slider')->insert($data);
    	Session::put('message','slider added successfully !!');
    	return Redirect::to('/add-slider');
    }

     public function unactive_slider($id_slider){
        DB::table('slider')
            ->where('id_slider',$id_slider)
            ->update(['publication_status' => 0 ]);
            return Redirect::to('/all-slider');
    }

    public function active_slider($id_slider){
        DB::table('slider')
            ->where('id_slider',$id_slider)
            ->update(['publication_status' => 1 ]);
            return Redirect::to('/all-slider');
    }

    public function edit_slider($id_slider){
        $slider_info=DB::table('slider')
            ->where('id_slider',$id_slider)
            ->first();
            $slider_info=view('page.admin.edit_slider')
           ->with('slider_info',$slider_info);
         return view('page.Admin.layouts.app')
           ->with('page.admin.edit_slider',$slider_info);
    }

    public function update_slider(Request $request, $id_slider){
        $data=array();
        $data['slider_description']=$request->slider_description;
        $data['publication_status']=$request->publication_status;
        $image=$request->file('slider_image');
        if($image){
            $image_name=str_random(20);
            $ext=Strtolower($image->getClientOriginalExtension());
            $image_full_name=$image_name.'.'.$ext;
            $upload_path='slider/';
            $image_url=$upload_path.$image_full_name;
            $success=$image->move($upload_path,$image_full_name);
            if($success){
                $data['slider_image']=$image_url;
                   DB::table('slider')
                   ->where('id_slider',$id_slider)
                   ->update($data);
                   Session::put('message','slider adde successfully!!');
                   return Redirect::to('/all-slider');

                   // echo "<pre>";
                   // print_r($data);
                   // echo "</pre>";
                   // exit();
            }
        }

        $data['slider_image']='';
        DB::table('slider')
        ->where('id_slider',$id_slider)
        ->Update($data);
        Session::put('message','Category Update successfully !!');
        return Redirect::to('/all-slider');
    }

    

    public function delete_slider($id_slider){
        DB::table('slider')
            ->where('id_slider',$id_slider)
            ->delete();
            Session::put('message','Category delete successfully !!');
            return Redirect::to('/all-slider');
    }
}
