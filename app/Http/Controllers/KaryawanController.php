<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Symfony\Component\HttpKernel\Event\RequestEvent;

class KaryawanController extends Controller
{
    public function index(){
        $karyawan = DB::table('karyawan')->get();
        return view('EAS/index', ['karyawan' => $karyawan]);
    }

    public function tambah(){
        return view('EAS/tambah');
    }

    public function store(Request $request){
        $request->validate([
            'kodepegawai' => 'required',
            'namalengkap' => 'required',
            'divisi' => 'required',
            'departemen' => 'required',
        ]);

        $existingEntry = DB::table('karyawan')->where('kodepegawai', $request->kodepegawai)->exists();

        if ($existingEntry) {
            return redirect('/karyawan')
                ->withErrors(['kodepegawai' => 'Kode pegawai sudah ada. Tolong masukkan kodepegawai yang berbeda.']);
        }
        DB::table('karyawan')->insert
        ([
            'kodepegawai' => $request->kodepegawai,
			'namalengkap' => $request->namalengkap,
			'divisi' => $request->divisi,
			'departemen' => $request->departemen
        ]);

        return redirect('/karyawan');
    }

    public function hapus($id){
        DB::table('karyawan')->where('kodepegawai',$id)->delete();
        return redirect('/karyawan');
    }

}
