<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class registercontroller extends Controller
{
    public function index()
    {
       
return view('register.index',[
]);
    
    }
    public function store(Request $request){
   $validatedData=$request-> validate([
        'name'=>'required|max:255',
        'email'=>'required|email:dns|unique:users',
        'password'=>'required|min:3|max:255'
        
    ]);
    $validatedData['password']=Hash::make($validatedData['password']);
   User::create($validatedData);
   $request->session()->flash('success','Registration successfull! Please Log In');
   return redirect('/register')->with('success','Registration successfull! Please Log In');
}
}