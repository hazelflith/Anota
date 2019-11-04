<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     $nama = 'Haris';
//     return view('index', ['nama' => $nama]);
// });

// Route::get('/order', function () {
//     $nama = 'Haris';
//     return view('order',  ['nama' => $nama]);
// });

// Route::get('/karyawan', function () {
//     $nama = 'Haris';
//     return view('karyawan',  ['nama' => $nama]);
// });

// Route::get('/keuangan', function () {
//     $nama = 'Haris';
//     return view('keuangan',  ['nama' => $nama]);
// });

// Route::get('/akta', function () {
//     $nama = 'Haris';
//     return view('akta',  ['nama' => $nama]);
// });

// Route::get('/user', function () {
//     $nama = 'Haris';
//     return view('user',  ['nama' => $nama]);
// });

Route::get('/','PagesController@beranda');
Route::get('/order','OrderController@index');
Route::get('/karyawan','KaryawanController@index');
Route::get('/keuangan','KeuanganController@index');
Route::get('/akta','PagesController@akta');
Route::get('/user','PagesController@user');