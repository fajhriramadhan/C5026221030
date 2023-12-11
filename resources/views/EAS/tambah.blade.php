@extends('tugas_praeas/master')
@section('judulhalaman', 'Data Karyawan')
@section('konten')
	<h3>Data Karyawan</h3>

    <a href="/karyawan">Kembali</a>
    <br><br>

    <form class="form-horizontal" action="/karyawan/store" method="post">
        {{ csrf_field() }}
        <div class="container mt-4">
            <div class="form-group row">
                <label class="col-sm-2 col-form-label" for="kodepegawai">Kode Pegawai</label>
                <div class="col-sm-10">
                    <input type="text" required class="form-control" name="kodepegawai" id="kodepegawai" placeholder="Masukkan Kode Pegawai">
                </div>
            </div>

            <div class="form-group row">
                <label class="col-sm-2 col-form-label" for="namalengkap">Nama Lengkap</label>
                <div class="col-sm-10">
                    <input type="text" required class="form-control" name="namalengkap" id="namalengkap" placeholder="Masukkan Nama Lengkap Karyawan">
                </div>
            </div>

            <div class="form-group row">
                <label class="col-sm-2 col-form-label" for="divisi">Divisi</label>
                <div class="col-sm-10">
                    <input type="text" required class="form-control" name="divisi" id="divisi" placeholder="Masukkan Divisi Karyawan">
                </div>
            </div>

            <div class="form-group row">
                <label class="col-sm-2 col-form-label" for="departemen">Departemen</label>
                <div class="col-sm-10">
                    <input type="text" required class="form-control" name="departemen" id="departemen" placeholder="Masukkan Departemen Karyawan">
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
