@extends('template')

@section('content')
	<h3>Data Karyawan</h3>


	<table class="table table-striped table-hover align-middle text-center shadow-sm">
		<tr>
			<th>Kode Pegawai</th>
			<th>Nama Lengkap</th>
			<th>Divisi</th>
			<th>Departemen</th>
            <th>Opsi</th>
		</tr>
		@foreach($karyawan as $k)
		<tr>
			<td>{{ $k->kodepegawai }}</td>
			<td style="text-transform: uppercase;">{{ $k->namalengkap }}</td>
			<td>{{ $k->divisi }}</td>
			<td style="text-transform: lowercase;">{{ $k->departemen }}</td>
			<td>
				<a href="/karyawan/hapus/{{ $k->kodepegawai }}" class="btn btn-danger">Hapus Data</a>
			</td>
		</tr>
		@endforeach
	</table>
    <div style="text-align: right;">
        <a href="/karyawan/tambah" class="btn btn-primary" style="margin-top: 5px; margin-bottom: 15px; margin-right: 50px;">Tambah Data</a>
    </div>

{{ $karyawan->links() }}
@endsection
