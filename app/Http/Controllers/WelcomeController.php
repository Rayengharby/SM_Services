<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Services;
use App\Models\Chiffres;

class WelcomeController extends Controller
{
    //
    public function home(){
        $Services=Services::all(); //recuperer les services de la base
        $Chiffres=Chiffres::all(); //recuperer les chiffres de la base
        return view('welcome')->with('Services',$Services)->with('Chiffres',$Chiffres);
    }

 
}
