<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\pembayaran;
use Illuminate\Support\Facades\Auth;

class logincontroller extends Controller
{
    public function index()
    {
       
return view('login.index',[
'title'=>'login'

]);
    }
    public function authenticate(Request $request){
        $credentials=$request->validate([
            'email'=>'required|email:dns',
        'password'=>'required'
        ]);
        if(auth::attempt($credentials)){
            $request->session()->regenerate();
            return redirect()->intended('/Dashbord');
        }
        return back()->with('loginError','Login Failed');
    
    
 

    }
    public function logout(Request $request){

        Auth::logout();
 
        $request->session()->invalidate();
     
        $request->session()->regenerateToken();
     
        return redirect('/login');
    }
}