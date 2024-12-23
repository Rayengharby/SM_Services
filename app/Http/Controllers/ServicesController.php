<?php

namespace App\Http\Controllers;
use App\Models\Services;
use Illuminate\Http\Request;

class ServicesController extends Controller
{
    //
       //fonction qui permet d'afficher la liste de services
       public function index(){
        $Services=Services::all();

        return view('admin.services.index')->with('Services',$Services);}


        //fonction qui permet d'ajouter un service dans la base
   public function store(Request $request){
    $request->validate([
        'name'=>'required',
        'description'=>'required',
        'photo'=>'required',
        'icon'=>'required',


    ]);
  // Upload image :
        $newname=uniqid();
        $image=$request->file('photo');
          $newname.="." . $image->getClientOriginalExtension();
        $destinationPath='imageServices';
        $image->move($destinationPath, $newname);

    $Services= new Services();
    $Services->name =$request->name;

    $Services->description =$request->description;
      $Services->photo =$newname;
      $Services->icon =$request->icon;
 if(   $Services->save()){
    return redirect()->back();}
    else {
        echo"errors";
    }
}
//fonction qui permet de supprimer une produit dans la base

public function destroy($id){
    $Services= Services::find($id);

    $file_path=public_path().'/imageServices/'.$Services->photo;

    unlink($file_path);
  if(  $Services->delete()){
    return redirect()->back();
  }
  else {
    echo"errors";
}
}
//fonction qui permet de modifier un produit dans la base
public function update(Request $request){

    $Services= Services::find($request->idservices);
         $Services->name =$request->name;

              $Services->description =$request->description;
              $Services->icon =$request->icon;

      // supprimer ancienne image :
      if ($request->file('photo')){
        $file_path=public_path().'/imageServices/'.$Services->photo;

        unlink($file_path);
        //upload nv photo
                 $newname=uniqid();
           $image=$request->file('photo');
             $newname.=".".$image->getClientOriginalExtension();
             $destinationPath='imageServices';
             $image->move($destinationPath, $newname);
         $Services->photo =$newname;
            }


      if(   $Services->update()){
         return redirect()->back();}
         else {
             echo"errors";
         }
     }
     public function home(){
        $Services=Services::all(); //recuperer les services de la base
        return view('service')->with('Services',$Services);
    }

}
