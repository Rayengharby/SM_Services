<?php

namespace App\Http\Controllers;
use App\Models\propos;
use App\Models\Chiffres;
use Illuminate\Http\Request;

class ProposController extends Controller
{
    //  //
       //fonction qui permet d'afficher la liste de services
       public function index(){
        $Propos=Propos::all();

        return view('admin.propos.index')->with('Propos',$Propos);}


        //fonction qui permet d'ajouter un produit dans la base
   public function store(Request $request){
    $request->validate([
        'name'=>'required',
        'description'=>'required',

        'icon'=>'required',


    ]);
    $Propos= new Propos();
    $Propos->name =$request->name;

    $Propos->description =$request->description;

      $Propos->icon =$request->icon;
 if(   $Propos->save()){
    return redirect()->back();}
    else {
        echo"errors";
    }}

//fonction qui permet de supprimer une produit dans la base

public function destroy($id){
    $Propos= Propos::find($id);


  if(  $Propos->delete()){
    return redirect()->back();
  }
  else {
    echo"errors";
}
}
  //fonction qui permet de modifier une categories dans la base

  public function update(Request $request){


    $Propos= Propos::find($request->idpropos);

   $Propos->name =$request->name;
   $Propos->description =$request->description;
   $Propos->icon =$request->icon;
if(  $Propos->update()){
return redirect()->back();
 }
  else {
    echo"errors";
}
}
     public function home(){
        $Propos=Propos::all(); //recuperer les services de la base
        $Chiffres=Chiffres::all(); //recuperer les services de la base
        return view('scs.propos')->with('Propos',$Propos)->with('Chiffres',$Chiffres);
    }

}
