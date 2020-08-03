<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests;
use Session;
Session_start();

class OrderController extends Controller
{

	public function index(){
		return view('admin.all_order');
	}

	public function all_order(){
    	$all_order_info=DB::table('order')
    	                    ->join('product','order.product_id','=','product.product_id')
                            ->select('order.*','product.product_name','product.product_image')
    	                     ->get();
    	$manage_order=view('page.admin.all_order')
    	   ->with('all_order_info',$all_order_info);	
    	 return view('page.Admin.layouts.app')
    	   ->with('admin.all_order',$manage_order);  
    	// return view('admin.all_category');
    }


    public function save_order(Request $request){
    	$data=array();
        $data['order_id']=$request->order_id;
    	$data['product_id']=$request->product_id;
    	$data['pick_up']=$request->pick_up;
    	$data['date_pick_up']=$request->date_pick_up;
    	$data['time_pick_up']=$request->time_pick_up;
    	$data['date_drop_off']=$request->date_drop_off;
    	$data['time_drop_off']=$request->time_drop_off;
    	$data['name']=$request->name;
    	$data['telephone']=$request->telephone;
    	$data['email']=$request->email;
    	$data['age']=$request->age;
    	DB::table('order')->insert($data);
    	return Redirect::to('/thanks');    
    }

    public function thanks(){
        return view('page.thanks');
    }

    public function edit_order($order_id){
        $order_info=DB::table('order')
            ->where('order_id',$order_id)
            ->first();
            $order_info=view('page.admin.dashboard')
           ->with('order_info',$order_info);
         return view('page.Admin.layouts.app')
           ->with('page.admin.dashboard',$order_info);
    }

    


    public function unactive_order($order_id){
        DB::table('order')
            ->where('order_id',$order_id)
            ->update(['etet_conf' => 1 ]);
            return Redirect::to('/all-order');
    }

    public function active_order($order_id){
        DB::table('order')
            ->where('order_id',$order_id)
            ->update(['etat_conf' => 0 ]);
            return Redirect::to('/all-order');
    }

    public function delete_order($order_id){
        DB::table('order')
            ->where('order_id',$order_id)
            ->delete();
            Session::put('message','product delete successfully !!');
            return Redirect::to('/all-order');
    }

}
