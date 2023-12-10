@extends('tugas15/master')
@section('judulhalaman', 'Data Pegawai')
@section('konten')
	<h2>www.malasngoding.com</h2>
	<h3>Data Pegawai</h3>

	<a href="/nilaikuliah/tambah" class="btn-primary"> + Tambah Mahasiswa</a>


	<table class="table table-striped table-hover">
		<tr>
			<th>ID</th>
			<th>NRP</th>
			<th>NilaiAngka</th>
			<th>SKS</th>
			<th>Nilai Huruf</th>
            <th>Bobot</th>
		</tr>
		@foreach($nilaikuliah as $p)
		<tr>
			<td>{{ $p->ID }}</td>
			<td>{{ $p->NRP }}</td>
			<td>{{ $p->SKS }}</td>
			<td>{{ $p->NilaiAngka}}</td>
            <td>
                @if ($p->NilaiAngka <=40)D
                @elseif ($p->NilaiAngka <=60)C
                @elseif ($p->NilaiAngka <=80)B
                @elseif ($p->NilaiAngka <=100)A
                @endif
            </td>
            <td>{{$p->NilaiAngka * $p->SKS}}</td>
			{{-- <td>
				<a href="/pegawai/edit/{{ $p->pegawai_id }}" class="btn btn-warning">Edit</a>
				|
				<a href="/pegawai/hapus/{{ $p->pegawai_id }}" class="btn btn-danger">Hapus</a>
				|
				<a href="/pegawai/view/{{ $p->pegawai_id }}" class="btn btn-info">View</a>
			</td> --}}
		</tr>
		@endforeach
	</table>
@endsection
