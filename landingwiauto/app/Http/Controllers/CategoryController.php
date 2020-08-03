<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests;
use Session;
Session_start();

class CategoryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(){
    	return view('page.admin.add_category');
    }

    public function all_category(){
    	$all_category_info=DB::table('category')->get();
    	$manage_category=view('page.Admin.all_category')
    	   ->with('all_category_info',$all_category_info);
    	 return view('page.Admin.layouts.app')
    	   ->with('page.Admin.all_category',$manage_category);  
    	// return view('admin.all_category');
    }

    public function save_category(Request $request){
    	$data=array();
    	$data['category_id']=$request->category_id;
        $data['id']=$request->id;
    	$data['category_name']=$request->category_name;
    	$data['category_description']=$request->category_description;
    	$data['publication_status']=$request->publication_status;

    	DB::table('category')->insert($data);
    	Session::put('message','Category added successfully !!');
    	return Redirect::to('/add-category');
    }

    public function unactive_category($category_id){
    	DB::table('category')
    	    ->where('category_id',$category_id)
    	    ->update(['publication_status' => 0 ]);
    	    return Redirect::to('/all-category');
    }

    public function active_category($category_id){
    	DB::table('category')
    	    ->where('category_id',$category_id)
    	    ->update(['publication_status' => 1 ]);
    	    return Redirect::to('/all-category');
    }

    public function edit_category($category_id){
    	$category_info=DB::table('category')
    	    ->where('category_id',$category_id)
    	    ->first();
    	    $category_info=view('page.admin.edit_category')
    	   ->with('category_info',$category_info);
    	 return view('page.Admin.layouts.app')
    	   ->with('page.admin.edit_category',$category_info);
    }

    public function update_category(Request $request, $category_id){
        $data=array();
        $data['category_name']=$request->category_name;
        $data['category_description']=$request->category_description;
        $data['publication_status']=$request->publication_status;

        DB::table('category')
        ->where('category_id',$category_id)
        ->Update($data);
        Session::put('message','Category Update successfully !!');
        return Redirect::to('/all-category');
    }

    

    public function delete_category($category_id){
    	DB::table('category')
    	    ->where('category_id',$category_id)
    	    ->delete();
    	    Session::put('message','Category delete successfully !!');
    	    return Redirect::to('/all-category');
    }
}
