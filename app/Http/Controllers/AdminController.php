<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
class AdminController extends Controller
{
    //
    public function dashboard(){
        $user=user::all();

         return view('admin.dashboard')->with('usser',$user);;

    }

     //fonction qui permet d'ajouter un produit dans la base
   public function store(Request $request){
    $request->validate([


        'email'=>'required',
        'name'=>'required',
        'role'=>'required',
        'password'=>'required',

    ]);
    $User= new User();
    $User->name =$request->name;
    $User->email =$request->email;
    $User->role =$request->role;
    $User->password =Hash::make($request->password);

 if(   $User->save()){
    return redirect()->back();}
    else {
        echo"errors";
    }}
        //fonction qui permet de supprimer un admin dans la base

public function destroy($id){
    $user= User::find($id);


  if(  $user->delete()){
    return redirect()->back();
  }
  else {
    echo"errors";
}
}
}
