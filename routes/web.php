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

Route::get('/','HomeController@beranda')->name('default');
Route::get('/karyawan','KaryawanController@index');
Route::get('/keuangan','KeuanganController@index');
Route::get('/akta','PagesController@akta');
Route::get('/user','PagesController@user');
Auth::routes();

//order
Route::get('/order','OrderController@index');
Route::get('/order/create','OrderController@create');