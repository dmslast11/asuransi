<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function register(){
        return view('register.index');
    }

    public function register_proses(Request $request){
        $request->validate([
            'name' => 'required',
            'level' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|confirmed|min:8',
            'password_confirmation' => 'required|same:password'
        ]);
        
        $user = User::create($request->except('_token'));

        return redirect()->route('login')->with('success', 'Akun berhasil dibuat, Silahkan login terlebih dahulu');
    
        // return redirect()->route('login')->with('success', 'Register telah berhasil, silahkan login terlebih dahulu');
    }
}
