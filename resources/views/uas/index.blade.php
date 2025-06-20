@extends('template')

@section('content')
	<h3>Data MyKaryawan</h3>

	<table class="table table-striped">
		<tr>
			<th>Kode Pegawai</th>
			<th>Nama Lengkap</th>
			<th>Divisi</th>
			<th>Departemen</th>
			<th>Opsi</th>
		</tr>
		@foreach($mykaryawan as $m)
		<tr>
			<td>{{ $m->kodepegawai }}</td>
			<td style="text-transform: capitalize;">{{ $m->namalengkap }}</td>
			<td>{{ $m->divisi }}</td>
			<td>{{ $m->departemen }}</td>
			<td>
				<a href="/uas/edit/{{ $m->kodepegawai }}" class="btn btn-success">Edit</a>
				|
				<a href="/uas/view/{{ $m->kodepegawai }}" class="btn btn-danger">View</a>
			</td>
		</tr>
		@endforeach
	</table>
@endsection
