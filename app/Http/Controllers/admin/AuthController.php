<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
   public function register(){
    return view('admin.auth.register'); 
   }
   public function registerauth(Request $req){
    $req->validate([
        'name'=>'required',
        'email'=>'required|email|unique:users',
        'password'=>'required',
    ]);
    User::create([
        'name'=>$req->name,
        'email'=>$req->email,
        'password'=>Hash::make($req->password),
    ]);
    return redirect()->route('auth.login')->with('success','You are register Successfully');

   }
   public function login(){
    return view('admin.auth.login');
   }
   public function loginauth(Request $req){
    if(Auth::attempt(['email'=>$req->email,'password'=>$req->psssword])){
        return redirect()->route('Dashboard')->with('success','you are login successfully');
    }
   
   }
   
}