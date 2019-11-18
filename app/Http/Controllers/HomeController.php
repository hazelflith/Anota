<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function beranda()
    {
        if(Auth::check())   //cek apakah dia sudah login
            return view('index');
        else   
            return view('auth.login');
            
    }
}
