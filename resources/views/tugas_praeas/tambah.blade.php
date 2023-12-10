@extends('tugas_praeas/master')
@section('judulhalaman', 'Data Pegawai')
@section('konten')
	<h3>Data Kertas HVS</h3>

    <a href="/kertashvs">Kembali</a>
    <br><br>

    <form class="form-horizontal" action="/kertashvs/store" method="post">
        {{ csrf_field() }}
        <div class="container mt-4">
            <div class="form-group row">
                <label class="col-sm-2 col-form-label" for="merkkertashvs">Merk Kertas HVS</label>
                <div class="col-sm-10">
                    <input type="text" required class="form-control" name="merkkertashvs" id="merkkertashvs" placeholder="Masukkan Merk Kertas HVS">
                </div>
            </div>

            <div class="form-group row">
                <label class="col-sm-2 col-form-label" for="stockkertashvs">Stock Kertas HVS</label>
                <div class="col-sm-10">
                    <input type="text" required class="form-control" name="stockkertashvs" id="stockkertashvs" placeholder="Masukkan Stock Kertas HVS">
                </div>
            </div>

            <div class="form-group row">
                <div class="col-sm-10 offset-sm-2">
                    <button type="submit" class="btn btn-primary">Simpan Data</button>
                </div>
            </div>
        </div>
    </form>

	</table>
@endsection
