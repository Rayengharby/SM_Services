<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    //    //fonction qui permet d'ajouter une categories dans la base
    public function store(Request $request){
        $request->validate([
            'name'=>'required',
            'message'=>'required',
            'sub'=>'required',
            'email'=>'required'
        ]);
        $contact= new contact();
        $contact->name =$request->name;
        $contact->message =$request->message;
        $contact->sub =$request->sub;
        $contact->email =$request->email;
     if(   $contact->save()){
        return redirect()->back();}
        else {
            echo"errors";
        }

    }
     //fonction qui permet d'afficher la liste de Contact
        public function index(){
            $Contact=Contact::all();

            return view('admin.Contact.index')->with('Contact',$Contact);}
    //fonction qui permet de supprimer un contact dans la base

public function destroy($id){
    $Contact= contact::find($id);


  if(  $Contact->delete()){
    return redirect()->back();
  }
  else {
    echo"errors";
}
}
}
