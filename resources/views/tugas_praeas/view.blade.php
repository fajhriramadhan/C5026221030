@extends('/tugas_praeas/master')
@section('judulhalaman','Kertas HVS')
@section('konten')

<a href="/kertashvs"> Kembali</a>

@foreach($kertashvs as $p)
<div class="row my-4">
    <div class="col-md">
        <div class="d-flex align-items-center h-100">
            <div class="w-100">
                <div class="mt-5 d-block d-md-none"></div>
                <div class="row ">
                    <div class="col-3 ">
                        <h2 class="d-none d-md-block">Kode Kertas HVS</h2>
                        <h5 class="d-block d-md-none">Kode Kertas HVS</h5>
                    </div>
                    <div class="col">
                        <h2 class="d-none d-md-block">: {{$p->kodekertashvs}}</h2>
                        <h5 class="d-block d-md-none">: {{$p->kodekertashvs}}</h5>
                    </div>
                </div>
                <div class="row ">
                    <div class="col-3 ">
                        <h2 class="d-none d-md-block">Merk kertas</h2>
                        <h5 class="d-block d-md-none">Merk kertas</h5>
                    </div>
                    <div class="col">
                        <h2 class="d-none d-md-block">: {{$p->merkkertashvs }}</h2>
                        <h5 class="d-block d-md-none">: {{$p->merkkertashvs }}</h5>
                    </div>
                </div>
                <div class="row ">
                    <div class="col-3 ">
                        <h2 class="d-none d-md-block">Jumalah Stok</h2>
                        <h5 class="d-block d-md-none">Jumalah Stok</h5>
                    </div>
                    <div class="col">
                        <h2 class="d-none d-md-block">: {{$p->stockkertashvs }}</h2>
                        <h5 class="d-block d-md-none">: {{$p->stockkertashvs }}</h5>
                    </div>
                </div>
                <div class="row ">
                    <div class="col-3 ">
                        <h2 class="d-none d-md-block">Ketersediaan</h2>
                        <h5 class="d-block d-md-none">Ketersediaan</h5>
                    </div>
                    <div class="col">
                        <h2 class="d-none d-md-block">: {{$p->tersedia }}</h2>
                        <h5 class="d-block d-md-none">: {{$p->tersedia }}</h5>
                    </div>
                </div>
                <div class="row mt-5">
                    <div class="col-3">
                        <a href="/kertashvs/edit/{{$p->kodekertashvs }}" class="btn btn-warning w-100">Edit</a>
                    </div>


                </div>


            </div>
        </div>

    </div>
</div>
@endforeach


@endsection
