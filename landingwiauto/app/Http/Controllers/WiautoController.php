<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests;
use Mail;
use App\Mail\SendMail;
use Session;
Session_start();

class WiautoController extends Controller
{
    public function index(){

    	return view('WiAuto.home_wiauto');
    }

    public function checkout(){
    	return view('Wiauto.checkoute');
    }

    public function agency(Request $request){
      

      if(request()->ajax())
     {
      if(!empty($request->addresse_agence))
      {
       $data = DB::table('info')
         ->select('logo_agence', 'name_agence', 'addresse_agence', 'number_mobile')
         ->where('addresse_agence', $request->addresse_agence)
         ->get();
      }
      else
      {
       $data = DB::table('info')
         ->select('logo_agence', 'name_agence', 'addresse_agence', 'number_mobile')
         ->get();
      }
      return datatables()->of($data)->make(true);
     }
     $agence = DB::table('info')
          ->get();
     return view('Wiauto.agen', compact('agence'));
    }

    public function alcar(){
    	return view('Wiauto.product');
    }

    public function show_product_by_category($category_id){
        $product_by_category=DB::table('product')
                             ->join('category','product.category_id','=','category.category_id')
                             ->join('brand','product.brand_id','=','brand.brand_id')
                              ->where('category.category_id',$category_id)
                              ->limit(3)
                             ->get();
        $manage_product_by_category=view('Wiauto.product')
                       ->with('product_by_category',$product_by_category);
                       return view('layout')
                                  ->with('Wiauto.product',$manage_product_by_category); 
    }

    public function contact(){
    	return view('Wiauto.contact');
    }

    public function sendemail(Request $get){
      $email = $get->email;
      $subject = $get->subject;
      $message = $get->message;
      Mail::to($email)->send(new SendMail($subject, $message));
    }

    public function privacy(){
    	return view('Wiauto.privacy');
    }

    public function condition(){
    	return view('Wiauto.condition');
    }

    public function show_product_by_brand($brand_id){
        $product_by_brand=DB::table('product')
                             ->join('brand','product.brand_id','=','brand.brand_id')
                             ->join('category','product.category_id','=','category.category_id')
                              ->where('brand.brand_id',$brand_id)
                              ->limit(1)
                             ->get();
        $manage_product_by_brand=view('page.product_by_brand')
                       ->with('product_by_brand',$product_by_brand);
                       return view('layout')
                                  ->with('Wiauto.product_by_brand',$manage_product_by_brand); 
    }

    public function show_agence_by_city($id_info){
        $agence_by_city=DB::table('info')
                              ->where('info.id_info',$id_info)
                              ->limit(1)
                             ->get();
        $manage_agence_by_city=view('Wiauto.agence_by_city')
                       ->with('product_by_city',$agence_by_city);
                       return view('WiAuto.agence')
                                  ->with('product_by_city',$manage_agence_by_city); 
    }

    public function search(Request $request){
      dd( $request);
      $addresse_agence = $request->get('addresse_agence');
      $posts = DB::table('info')->where('addresse_agence', 'like', '%'.$addresse_agence. '%');
      return view('Wiauto.agen', ['info' => $posts]);
    }

    public function productsCat(Request $request){
       $id_info = $request->id_info;

       

          //echo "both are selected";
          $data = DB::table('info')
          ->where('info.id_info',$id_info)
          ->get();

      return view('Wiauto.agence',['data' => $data, 'id_info' => $data[0]->addresse_agence]);

    }


    
}
