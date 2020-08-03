<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests;
use Session;
Session_start();

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function inde()
    {
        $all_published_product=DB::table('product')
                             ->join('category','product.category_id','=','category.category_id')
                             ->join('brand','product.brand_id','=','brand.brand_id')
                             // ->limit(9)
                              ->where('product.publication_status',1)
                             ->get();
        $manage_published_product=view('page.home_content')
                       ->with('all_published_product',$all_published_product);
        return view('page.home_content');
    }

    public function show_product_by_category($category_id){
        $product_by_category=DB::table('product')
                             ->join('category','product.category_id','=','category.category_id')
                             ->join('brand','product.brand_id','=','brand.brand_id')
                              ->where('category.category_id',$category_id)
                              ->limit(1)
                             ->get();
        $manage_product_by_category=view('page.product_by_category')
                       ->with('product_by_category',$product_by_category);
                       return view('layout')
                                  ->with('page.product_by_category',$manage_product_by_category); 
    }

    public function show_product_details_by_id($product_id){
        
                       $product_by_details=DB::table('product')
                             ->join('category','product.category_id','=','category.category_id')
                             ->join('brand','product.brand_id','=','brand.brand_id')
                             ->select('product.*','category.category_name','brand.brand_name')
                              ->where('product.product_id',$product_id)
                             ->first();
        $manage_product_by_details=view('page.product_details')
                       ->with('product_by_details',$product_by_details);
                       return view('layout')
                                  ->with('page.product_details',$manage_product_by_details); 
    }
}
