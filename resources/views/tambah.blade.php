@extends('master2')
@section('title','Data Pegawai')
@section('konten')



<a href="/pegawai"> Kembali</a>

<br/>
<br/>

    <form class="form-horizontal" action="/pegawai/store" method="post">
        {{ csrf_field() }}
        <div class="container mt-4">
            <form>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label" for="nama">Nama</label>
                    <div class="col-sm-10">
                        <input type="text" required class="form-control" name="nama" id="nama" placeholder="Masukkan nama anda">
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-2 col-form-label" for="jabatan">Jabatan</label>
                    <div class="col-sm-10">
                        <input type="text" required class="form-control" name="jabatan" id="jabatan" placeholder="Masukkan jabatan anda">
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-2 col-form-label" for="umur">Umur</label>
                    <div class="col-sm-10">
                        <input type="number" required class="form-control" name="umur" id="umur" placeholder="Masukkan umur anda">
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-2 col-form-label" for="alamat">Alamat</label>
                    <div class="col-sm-10">
                        <textarea type="text" required class="form-control" name="alamat" id="alamat" placeholder="Masukkan alamat anda"></textarea>
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-sm-10 offset-sm-2">
                        <button type="submit" class="btn btn-primary">Simpan Data</button>
                    </div>
                </div>
            </form>
        </div>

      </form>
	@endsection
