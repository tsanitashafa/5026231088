@extends('template')

@section('content')
	<h3>Data Roti</h3>

	<a href="/roti/tambah" class="btn btn-primary"> + Tambah Roti Baru</a>

    <p>Cari Data Roti :</p>
	<form action="/roti/cari" method="GET">
		<input type="text" name="cari" class="form-control" name="cari" placeholder="Cari Roti ..">
		<input type="submit" class="btn btn-info" value="CARI">
	</form>
	<br/>

	<table class="table table-striped">
		<tr>
			<th>Merk Roti</th>
			<th>Harga Roti</th>
			<th>Tersedia</th>
			<th>Berat</th>
			<th>Opsi</th>
		</tr>
		@foreach($roti as $r)
		<tr>
			<td>{{ $r->roti_merkroti }}</td>
			<td>{{ $r->roti_hargaroti }}</td>
			<td>
                <div class="form-check">
                    <input type="checkbox" class="form-check-input" disabled id="tersedia{{ $r->roti_id }}" {{ $r->roti_tersedia == 1 ? 'checked' : '' }}>
                    <label class="form-check-label text-{{ $r->roti_tersedia == 1 ? 'success' : 'danger' }}" for="tersedia{{ $r->roti_id }}">
                        {{ $r->roti_tersedia == 1 ? 'Tersedia' : 'Tidak Tersedia' }}
                    </label>
                </div>
            </td>
			<td>{{ $r->roti_berat }}</td>
			<td>
				<a href="/roti/edit/{{ $r->roti_id }}" class="btn btn-success">Edit</a>
				|
				<a href="/roti/hapus/{{ $r->roti_id }}" class="btn btn-danger">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>
{{ $roti->links() }}
@endsection
