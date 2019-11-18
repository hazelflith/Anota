<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\User;
class PagesController extends Controller
{
    public $nama = 'Harris P';
    public function beranda()
    {
        $nama = $this->nama;
        return view('index', ['nama' => $nama]);
    }
    public function order()
    {
        $nama = $this->nama;
        return view('order', ['nama' => $nama]);
    }
    public function karyawan()
    {
        $nama = $this->nama;
        return view('karyawan', ['nama' => $nama]);
    }
    public function keuangan()
    {
        $nama = $this->nama;
        return view('keuangan', ['nama' => $nama]);
    }
    public function akta()
    {
        $nama = $this->nama;
        return view('akta', ['nama' => $nama]);
    }
    public function user()
    {
        $nama = $this->nama;
        return view('user', ['nama' => $nama]);
    }

    public function login()
    {
        return view('auth.login');
    }
}