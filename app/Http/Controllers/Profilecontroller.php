<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Profilecontroller extends Controller
{
    public function index()
    {
       
       return view("profile.index");
    }
}
