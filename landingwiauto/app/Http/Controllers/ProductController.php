<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests;
use Session;
Session_start();

class ProductController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(){
    	return view('page.admin.add_product');
    }

    public function all_product(){
    	$all_product_info=DB::table('product')
    	                    ->join('category','product.category_id','=','category.category_id')
    	                     ->join('brand','product.brand_id','=','brand.brand_id')
                             ->select('product.*','category.category_name','brand.brand_name')
    	                     ->get();
    	$manage_product=view('page.admin.all_product')
    	   ->with('all_product_info',$all_product_info);	
    	 return view('page.Admin.layouts.app')
    	   ->with('admin.all_product',$manage_product);  
    	// return view('admin.all_category');
    }

    public function save_product(Request $request){
    	$data=array();
    	$data['product_id']=$request->product_id;
        $data['id']=$request->id;
    	$data['category_id']=$request->category_id;
    	$data['brand_id']=$request->brand_id;
    	$data['product_name']=$request->product_name;
    	$data['product_short_description']=$request->product_short_description;
    	$data['product_long_description']=$request->product_long_description;
    	$data['product_model']=$request->product_model;
    	$data['price']=$request->price;
    	$data['publication_status']=$request->publication_status;

    	$image=$request->file('product_image');
    	if($image){
    		$image_name=str_random(20);
    		$ext=Strtolower($image->getClientOriginalExtension());
    		$image_full_name=$image_name.'.'.$ext;
    		$upload_path='logo/';
    		$image_url=$upload_path.$image_full_name;
    		$success=$image->move($upload_path,$image_full_name);
    		if($success){
    			$data['product_image']=$image_url;
    			   DB::table('product')->insert($data);
    			   Session::put('message','Product adde successfully!!');
    			   return Redirect::to('/add-product');

    			   // echo "<pre>";
    			   // print_r($data);
    			   // echo "</pre>";
    			   // exit();
    		}
    	}

    	$data['product_image']='';
    	DB::table('product')->insert($data);
    	Session::put('message','Product added successfully !!');
    	return Redirect::to('/add-product');
    }

    public function unactive_product($product_id){
        DB::table('product')
            ->where('product_id',$product_id)
            ->update(['publication_status' => 0 ]);
            return Redirect::to('/all-product');
    }

    public function active_product($product_id){
        DB::table('product')
            ->where('product_id',$product_id)
            ->update(['publication_status' => 1 ]);
            return Redirect::to('/all-product');
    }

    public function edit_product($product_id){
        $product_info=DB::table('product')
            ->where('product_id',$product_id)
            ->first();
            $product_info=view('page.admin.edit_product')
           ->with('product_info',$product_info);
         return view('page.Admin.layouts.app')
           ->with('page.admin.edit_product',$product_info);
    }

    public function update_product(Request $request, $product_id){
        $data=array();
        $data['product_name'] = $request->product_name;
        $data['product_short_description'] = $request->product_short_description;

        DB::table('product')
           ->where('product_id', $product_id) 
           ->update($data);
        Session::put('message','product updated successfully !!');
        return Redirect::to('/all-product');
    }

    public function delete_product($product_id){
        DB::table('product')
            ->where('product_id',$product_id)
            ->delete();
            Session::put('message','product delete successfully !!');
            return Redirect::to('/all-product');
    }

    }
