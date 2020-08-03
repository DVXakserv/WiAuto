<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests;
use Session;
Session_start();

class SearchController extends Controller
{
    public function search_index(){
           return view('page.search');
    }

    public function search(Request $request){
        
        $category = $request->input('searchData');
    //now get all user and services in one go without looping using eager loading
    //In your foreach() loop, if you have 1000 users you will make 1000 queries

    $users = info::with('info', function($query) use ($category) {
         $query->where('addresse_agence', 'LIKE', '%' . $category . '%');
    })->get();

    return view('wiauto.agen', compact('users'));
    }

    public function contact(Request $request){
    	return view('page.contact');
    }

}
