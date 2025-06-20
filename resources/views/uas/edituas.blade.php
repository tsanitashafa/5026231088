@extends('template')

@section('content')
	<h3>Edit MyKaryawan</h3>

	<a href="/uas" class="btn btn-info"> Kembali</a>

	<br/>
	<br/>

	@foreach($mykaryawan as $r)
	<form action="/uas/update" method="post">
		{{ csrf_field() }}
		<input type="hidden" name="id" value="{{ $r->kodepegawai }}"> <br/>
        <div class="row">
            <div class="col-3">
                Kode Pegawai
            </div>
            <div class="col-8">
                <input type="text" name="kodepegawai" required="required" class="form-control" value="{{ $r->kodepegawai }}">
            </div>
        </div>
        <br/>

        <div class="row">
            <div class="col-3">
                Nama Lengkap
            </div>
            <div class="col-8">
                <input type="text" name="namalengkap" required="required" class="form-control" value="{{ $r->namalengkap }}">
            </div>
        </div>
        <br/>

        <div class="row">
            <div class="col-3">
                Divisi
            </div>
            <div class="col-8">
                <input type="text" name="divisi" required="required" class="form-control" value="{{ $r->divisi }}">
            </div>
        </div>
        <br/>

        <div class="row">
            <div class="col-3">
                Departemen
            </div>
            <div class="col-8">
                <input type="text" name="departemen" required="required" class="form-control" value="{{ $r->departemen }}"">
            </div>
        </div>
        <br/>
		<input type="submit" value="Simpan Data" class="btn btn-success">
	</form>
	@endforeach

@endsection
