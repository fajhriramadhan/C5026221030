<?php

use Illuminate\Support\Facades\Route;

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

Route::get('halo',function(){
    return "Halo apakabar";
});
Route::get('halo2',function(){
    return "<h1>Halo2 apakabar</h1>";
});

Route::get('blog',function(){
    return view('blog');
});
Route::get('/blog', function(){
    return view('home');
});

Route::get('/blog/tentang', function(){
    return view('tentang');
});

Route::get('/blog/kontak', function(){
    return view('kontak');
});
Route::get('formulir', 'App\Http\Controllers\MyController@formulir');

Route::post('/formulir/proses', 'App\Http\Controllers\MyController@proses');

Route::get('tugas1',function(){
    return view('tugas1');
});

Route::get('tugas2',function(){
    return view('tugas2');
});

Route::get('tugas3',function(){
    return view('tugas3');
});

Route::get('ETS',function(){
    return view('ETS');
});

Route::get('p2',function(){
    return view('p2');
});

Route::get('p3',function(){
    return view('p3');
});

Route::get('p4',function(){
    return view('p4');
});

Route::get('p5',function(){
    return view('p5');
});

Route::get('perkalian', 'App\Http\Controllers\MyController@index');

Route::get('showjam/{jam}', 'App\Http\Controllers\MyController@showtime');


//route CRUD
Route::get('/pegawai','App\Http\Controllers\PegawaiController@index');
Route::get('/pegawai/tambah','App\Http\Controllers\PegawaiController@tambah');
Route::post('/pegawai/store','App\Http\Controllers\PegawaiController@store');
Route::get('/pegawai/edit/{id}','App\Http\Controllers\PegawaiController@edit');
Route::post('/pegawai/update','App\Http\Controllers\PegawaiController@update');
Route::get('/pegawai/hapus/{id}','App\Http\Controllers\PegawaiController@hapus');
