<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests;
use Session;
Session_start();

class BrandController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
     public function index(){
    	return view('page.Admin.add_brand');
    }

    public function all_brand(){
    	$all_brand_info=DB::table('brand')->get();
    	$manage_brand=view('page.admin.all_brand')
    	   ->with('all_brand_info',$all_brand_info);
    	 return view('page.Admin.layouts.app')
    	   ->with('page.admin.all_brand',$manage_brand);  
    	// return view('admin.all_category');
    }

    public function save_brand(Request $request){
    	$data=array();
    	$data['brand_id']=$request->brand_id;
    	$data['id']=$request->id;
    	$data['brand_name']=$request->brand_name;
    	$data['brand_description']=$request->brand_description;
    	$data['publication_status']=$request->publication_status;

    	DB::table('brand')->insert($data);
    	Session::put('message','Brande added successfully !!');
    	return Redirect::to('/add-brand');
    }

    public function unactive_brand($brand_id){
    	DB::table('brand')
    	    ->where('brand_id',$brand_id)
    	    ->update(['publication_status' => 0 ]);
    	    return Redirect::to('/all-brand');
    }

    public function active_brand($brand_id){
    	DB::table('brand')
    	    ->where('brand_id',$brand_id)
    	    ->update(['publication_status' => 1 ]);
    	    return Redirect::to('/all-brand');
    }

    public function edit_brand($brand_id){
        $brand_info=DB::table('brand')
            ->where('brand_id',$brand_id)
            ->first();
            $brand_info=view('page.admin.edit_brand')
           ->with('brand_info',$brand_info);
         return view('page.Admin.layouts.app')
           ->with('page.Admin.edit_brand',$brand_info);
    }

    public function update_brand(Request $request , $brand_id){
        $data=array();
        $data['brand_name']=$request->brand_name;
        $data['brand_description']=$request->brand_description;
        $data['publication_status']=$request->publication_status;

        DB::table('brand')
            ->where('brand_id',$brand_id)
            ->update($data);
        Session::put('message','Category Update successfully !!');
        return Redirect::to('/all-brand');
    }

    public function delete_brand($brand_id){
    	DB::table('brand')
    	    ->where('brand_id',$brand_id)
    	    ->delete();
    	    Session::put('message','brand delete successfully !!');
    	    return Redirect::to('/all-brand');
    }
}
