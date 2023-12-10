@extends('tugas_praeas/master')
@section('judulhalaman', 'Kertas')
@section('konten')
	<h3>Data Kertas HVS</h3>

	<a href="/kertashvs/tambah" class="btn-primary"> + Tambah Kertas HVS</a>


	<table class="table table-striped table-hover">
		<tr>
			<th>Kode Kertas HVS</th>
			<th>Merk Kertas HVS</th>
			<th>Stock Kertas HVS</th>
			<th>Tersedia</th>
            <th>Opsi</th>
		</tr>

        @foreach ($kertashvs as $s)
            <tr>
                <td>{{$s->kodekertashvs}}</td>
                <td>{{$s->merkkertashvs}}</td>
                <td>{{$s->stockkertashvs}}</td>
                <td>{{$s->tersedia}}</td>
                <td>
                    <a href="/kertashvs/edit/{{$s->kodekertashvs}}" class="btn btn-warning">Edit</a>
                    |
                    <a href="/kertashvs/hapus/{{$s->kodekertashvs}}" class="btn btn-danger">Hapus</a>
                    |
                    <a href="/kertashvs/view/{{$s->kodekertashvs}}" class="btn btn-info">View</a>

                </td>
            </tr>

        @endforeach
	</table>
@endsection
