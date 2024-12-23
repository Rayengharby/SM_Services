<?php

namespace App\Http\Controllers;
use App\Models\Services;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

class Searchcontroller extends Controller
{
    //
    function search (Request $request){
        if(isset($_GET['query'])){
            $search_text = $_GET['query'] ;
            $name = DB::table('Services')->where('name','LIKE','%' .$search_text. '%')->paginate(2);
            return view('search')->with('name',$name);
        }else{
            return view('welcome');
        }


    }

}
