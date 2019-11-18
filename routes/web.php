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

Route::get('/','PagesController@login');
Route::get('/beranda','PagesController@beranda');
Route::get('/order','OrderController@index');
Route::get('/karyawan','KaryawanController@index');
Route::get('/keuangan','KeuanganController@index');
Route::get('/akta','PagesController@akta');
Route::get('/user','PagesController@user');
Auth::routes();
