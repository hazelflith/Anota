<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\User;

class PagesController extends Controller
{
    /**
     * Create a new controller instance. Page hanya bisa diakses ketika sudah login
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function order()
    {
        return view('order');
    }
    public function karyawan()
    {
        return view('karyawan');
    }
    public function keuangan()
    {
        return view('keuangan');
    }
    public function akta()
    {
        return view('akta');
    }
    public function user()
    {
        return view('user');
    }

    public function login()
    {
        
        
        
    }
}