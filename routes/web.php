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
