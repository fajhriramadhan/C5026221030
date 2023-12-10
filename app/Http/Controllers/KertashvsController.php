<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Symfony\Component\HttpKernel\Event\RequestEvent;

class KertashvsController extends Controller
{
    public function index(){
        $kertashvs = DB::table('kertashvs')->get();
        return view('tugas_praeas/index', ['kertashvs' => $kertashvs]);
    }

    public function tambah(){
        return view('tugas_praeas/tambah');
    }

    public function store(Request $request){
        if($request->stockkertashvs >0) $available = 1;
        else $available = 0;
        DB::table('kertashvs')->insert
        ([
            'kodekertashvs' => $request->kodekertashvs,
			'merkkertashvs' => $request->merkkertashvs,
			'stockkertashvs' => $request->stockkertashvs,
			'tersedia' => $available
        ]);

        return redirect('/kertashvs');
    }

    public function hapus($id){
        DB::table('kertashvs')->where('kodekertashvs',$id)->delete();
        return redirect('kertashvs');
    }

    public function edit($id){
        $kertashvs = DB::table('kertashvs')->where('kodekertashvs',$id)->get();
        return view('/tugas_praeas/edit',['kertashvs' => $kertashvs]);
    }

    public function update(Request $request){
        if($request->stock >0) $available = 1;
        else $available = 0;
        DB::table('kertashvs')->where('kodekertashvs',$request->kode)->update([
            'merkkertashvs' => $request->merk,
            'stockkertashvs' => $request->stock,
            'tersedia' => $available
        ]);
        return redirect('/kertashvs');
    }

    public function view($id){
        $kertashvs = DB::table('kertashvs')->where('kodekertashvs',$id)->get();
        return view('/tugas_praeas/view', ['kertashvs' => $kertashvs]);
    }
}
