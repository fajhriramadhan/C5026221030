@extends('master2')
 @section('title','Data Pegawai')
 @section('konten')



	<a href="/pegawai"> Kembali</a>

	<br/>
	<br/>

	@foreach($pegawai as $p)
	<form class="form-horizontal" action="/pegawai/update" method="post">
        {{ csrf_field() }}
		<input type="hidden" name="id" value="{{ $p->pegawai_id }}">
        <div class="container mt-4">
            <form>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label" for="nama">Nama</label>
                    <div class="col-sm-10">
                        <input type="text" required class="form-control" value="{{ $p->pegawai_nama }}" name="nama" id="nama" placeholder="Masukkan nama anda disini">
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-2 col-form-label" for="jabatan">Jabatan</label>
                    <div class="col-sm-10">
                        <input type="text" required class="form-control" value="{{ $p->pegawai_jabatan }}" name="jabatan" id="jabatan" placeholder="Masukkan jabatan anda disini">
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-2 col-form-label" for="umur">Umur</label>
                    <div class="col-sm-10">
                        <input type="number" required class="form-control" value="{{ $p->pegawai_umur }}" name="umur" id="umur" placeholder="Masukkan umur anda disini">
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-2 col-form-label" for="alamat">Alamat</label>
                    <div class="col-sm-10">
                        <textarea type="text" required class="form-control" name="alamat" id="alamat" placeholder="Masukkan alamat anda disini">{{ $p->pegawai_alamat }}</textarea>
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
