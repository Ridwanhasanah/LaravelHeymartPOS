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

Route::get('/', function () {
    return view('welcome');
});

Route::get('login',function(){
	return view('layout.login');
});

/*===== Auth Start=====*/
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
/*===== Auth End =====*/

Route::get('user/profil',function(){
	echo "test";
});






/* ===== This is Only Testing Route start =====*/
Route::get('tanggal', function(){
	echo tanggal_indonesia(date('Y-m-d'));
});

Route::get('uang', function(){
	echo "Rp . ". format_uang(125000000000);
});

Route::get('terbilang', function(){
	echo ucwords(terbilang(10000));
});

/* ===== This is Only Testing Route End =====*/
