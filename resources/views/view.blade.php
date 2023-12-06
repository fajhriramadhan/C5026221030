@extends('master2')
@section('title','Data Pegawai')
@section('konten')

<a href="/pegawai"> Kembali</a>

@foreach($pegawai as $p)
<div class="row my-4">

    <div class="col-md-5">
        <div class="d-flex align-items-center justify-content-center ">
            <img src="https://th.bing.com/th/id/OIP.GoAfrjCreX1FEZc8cbB0jgHaHa?rs=1&pid=ImgDetMain" class="border border-dark img-fluid" style="height: 400px; width: 300px;">
        </div>
    </div>
    <div class="col-md">
        <div class="d-flex align-items-center h-100">
            <div class="w-100">
                <div class="mt-5 d-block d-md-none"></div>
                <div class="row ">
                    <div class="col-3 ">
                        <h2 class="d-none d-md-block">Nama</h2>
                        <h5 class="d-block d-md-none">Nama</h5>
                    </div>
                    <div class="col">
                        <h2 class="d-none d-md-block">: {{$p->pegawai_nama }}</h2>
                        <h5 class="d-block d-md-none">: {{$p->pegawai_nama }}</h5>
                    </div>
                </div>
                <div class="row ">
                    <div class="col-3 ">
                        <h2 class="d-none d-md-block">Jabatan</h2>
                        <h5 class="d-block d-md-none">Jabatan</h5>
                    </div>
                    <div class="col">
                        <h2 class="d-none d-md-block">: {{$p->pegawai_jabatan }}</h2>
                        <h5 class="d-block d-md-none">: {{$p->pegawai_jabatan }}</h5>
                    </div>
                </div>
                <div class="row ">
                    <div class="col-3 ">
                        <h2 class="d-none d-md-block">Umur</h2>
                        <h5 class="d-block d-md-none">Umur</h5>
                    </div>
                    <div class="col">
                        <h2 class="d-none d-md-block">: {{$p->pegawai_umur }}</h2>
                        <h5 class="d-block d-md-none">: {{$p->pegawai_umur }}</h5>
                    </div>
                </div>
                <div class="row ">
                    <div class="col-3 ">
                        <h2 class="d-none d-md-block">Alamat</h2>
                        <h5 class="d-block d-md-none">Alamat</h5>
                    </div>
                    <div class="col">
                        <h2 class="d-none d-md-block">: {{$p->pegawai_alamat }}</h2>
                        <h5 class="d-block d-md-none">: {{$p->pegawai_alamat }}</h5>
                    </div>
                </div>
                <div class="row mt-5">
                    <div class="col-3">
                        <a href="/pegawai/edit/{{$p->pegawai_id }}" class="btn btn-warning w-100">Edit</a>
                    </div>


                </div>


            </div>
        </div>

    </div>
</div>
@endforeach


@endsection
