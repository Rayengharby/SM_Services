<?php

namespace App\Http\Controllers;
use App\Models\References;
use Illuminate\Http\Request;

class ReferencesController extends Controller
{
    //
        //fonction qui permet d'afficher la liste de References
        public function index(){
            $References=References::all();

            return view('admin.references.index')->with('References',$References);}


            //fonction qui permet d'ajouter un produit dans la base
       public function store(Request $request){
        $request->validate([
            'name'=>'required',

            'photo'=>'required',



        ]);
      // Upload image :
            $newname=uniqid();
            $image=$request->file('photo');
              $newname.="." . $image->getClientOriginalExtension();
            $destinationPath='imageReferences';
            $image->move($destinationPath, $newname);

        $References= new References();
        $References->name =$request->name;

          $References->photo =$newname;

     if(   $References->save()){
        return redirect()->back();}
        else {
            echo"errors";
        }
    }
    //fonction qui permet de supprimer une produit dans la base

    public function destroy($id){
        $References= References::find($id);

        $file_path=public_path().'/imageReferences/'.$References->photo;

        unlink($file_path);
      if(  $References->delete()){
        return redirect()->back();
      }
      else {
        echo"errors";
    }
    }
    //fonction qui permet de modifier un produit dans la base
    public function update(Request $request){

        $References= References::find($request->idReferences);
             $References->name =$request->name;


          // supprimer ancienne image :
          if ($request->file('photo')){
            $file_path=public_path().'/imageReferences/'.$References->photo;

            unlink($file_path);
            //upload nv photo
                     $newname=uniqid();
               $image=$request->file('photo');
                 $newname.=".".$image->getClientOriginalExtension();
                 $destinationPath='imageReferences';
                 $image->move($destinationPath, $newname);
             $References->photo =$newname;
                }


          if(   $References->update()){
             return redirect()->back();}
             else {
                 echo"errors";
             }
         }
         public function home(){
            $References=References::all(); //recuperer les services de la base
            $Reference=References::distinct()->get(['name']);
            return view('reference')->with('References',$References)->with('Reference',$Reference);
        }
}
