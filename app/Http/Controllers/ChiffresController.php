<?php

namespace App\Http\Controllers;
use App\Models\Chiffres;
use Illuminate\Http\Request;

class ChiffresController extends Controller
{
    //
       //fonction qui permet d'afficher la liste de services
       public function index(){
        $Chiffres=Chiffres::all();

        return view('admin.Chiffres.index')->with('Chiffres',$Chiffres);}


        //fonction qui permet d'ajouter un produit dans la base
   public function store(Request $request){
    $request->validate([


        'Chiffres'=>'required',
        'name'=>'required',
        'description'=>'required',
        'icon'=>'required',

    ]);
    $Chiffres= new Chiffres();
    $Chiffres->name =$request->name;
    $Chiffres->icon =$request->icon;
    $Chiffres->description =$request->description;

      $Chiffres->Chiffres =$request->Chiffres;
 if(   $Chiffres->save()){
    return redirect()->back();}
    else {
        echo"errors";
    }}

//fonction qui permet de supprimer une produit dans la base

public function destroy($id){
    $Chiffres= Chiffres::find($id);


  if(  $Chiffres->delete()){
    return redirect()->back();
  }
  else {
    echo"errors";
}
}
  //fonction qui permet de modifier une categories dans la base

  public function update(Request $request){


    $Chiffres= Chiffres::find($request->idChiffres);

   $Chiffres->name =$request->name;
   $Chiffres->icon =$request->icon;
   $Chiffres->description =$request->description;
   $Chiffres->Chiffres =$request->Chiffres;
if(  $Chiffres->update()){
return redirect()->back();
 }
  else {
    echo"errors";
}
}


}
