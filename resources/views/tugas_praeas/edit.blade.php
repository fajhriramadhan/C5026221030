@extends('tugas_praeas/master')
@section('judulhalaman', 'Edit data')
@section('konten')
	<h3>Data Kertas HVS</h3>

	<a href="/kertashvs" class="btn-primary"> Kembali</a>


	@foreach($kertashvs as $p)
	<form class="form-horizontal" action="/kertashvs/update" method="post">
        {{ csrf_field() }}
		<input type="hidden" name="kode" value="{{ $p->kodekertashvs}}">
        <div class="container mt-4">
            <form>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label" for="merkkertashvs">Merk Kertas HVS</label>
                    <div class="col-sm-10">
                        <input type="text" required class="form-control" value="{{ $p->merkkertashvs }}" name="merk" id="merkkertashvs" placeholder="Masukkan merk kertas disini">
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-2 col-form-label" for="stockkertashvs">Stock Kertas HVS</label>
                    <div class="col-sm-10">
                        <input type="number" required class="form-control" value="{{ $p->stockkertashvs }}" name="stock" id="stockkertashvs" placeholder="Masukkan jumlah stock anda disini">
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-sm-10 offset-sm-2">
                        <button type="submit" class="btn btn-primary btn-lg">Simpan Data</button>
                    </div>
                </div>
            </form>
        </div>

      </form>
	@endforeach
@endsection
