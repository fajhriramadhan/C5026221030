<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyController extends Controller
{
    public function index(){
        $a = 8;
        $b = 8;
        $c = $a * $b ;
        return "<h1>Hasil Perkalian = " . $c . "</h1>";
    }
}
