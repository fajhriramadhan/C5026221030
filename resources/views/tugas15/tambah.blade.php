@extends('master2')
@section('title','Nilai Kuliah')
@section('konten')



<a href="/nilaikuliah"> Kembali</a>

<br/>
<br/>

    <form class="form-horizontal" action="/nilaikuliah/store" method="post">
        {{ csrf_field() }}
        <div class="container mt-4">
            <form>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label" for="nrp">NRP</label>
                    <div class="col-sm-10">
                        <input type="text" required class="form-control" name="nrp" id="nrp" placeholder="Masukkan NRP anda">
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-2 col-form-label" for="nilaiangka">Nilai Angka</label>
                    <div class="col-sm-10">
                        <input type="number" required class="form-control" name="nilaiangka" id="nilaiangka" placeholder="Masukkan Nilai anda">
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-2 col-form-label" for="sks">SKS</label>
                    <div class="col-sm-10">
                        <textarea type="text" required class="form-control" name="sks" id="sks" placeholder="Masukkan jumlah SKS"></textarea>
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
