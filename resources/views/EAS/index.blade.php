@extends('tugas_praeas/master')
@section('judulhalaman', 'Karyawan')
@section('konten')
	<h3>Data Karyawan</h3>

	<a href="/karyawan/tambah" class="btn-primary"> + Tambah Karyawan</a>
    @if($errors->has('kodepegawai'))
        <div class="alert alert-danger">
            {{ $errors->first('kodepegawai') }}
        </div>
    @endif

	<table class="table table-striped table-hover">
		<tr>
			<th>Kode Pegawai</th>
			<th>Nama Lengkap</th>
			<th>Divisi</th>
			<th>Departemen</th>
            <th>Opsi</th>
		</tr>

        @foreach ($karyawan as $s)
            <tr>
                <td>{{$s->kodepegawai}}</td>
                <td><p style="text-transform: uppercase">{{$s->namalengkap}}</p></td>
                <td><p style="text-transform: lowercase">{{$s->divisi}}</p></td>
                <td>{{$s->departemen}}</td>
                <td><a href="/karyawan/hapus/{{$s->kodepegawai}}" class="btn btn-danger">Hapus</a></td>
            </tr>

        @endforeach
	</table>
@endsection
