<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class Profilecontroller extends Controller
{
    public function index()
    {
       return view("profile.index");
    }

    public function update(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'nis' => 'required|string|max:255',
            'password' => 'required|string|min:8',
        ]);

        $user = auth()->user();
        $user->name = $request->input('name');
        $user->nis = $request->input('nis');
        $user->password = Hash::make($request->input('password'));
        $user->save();

        return redirect()->route('profile')->with('success', 'Profil berhasil diperbarui.');
    }
}
