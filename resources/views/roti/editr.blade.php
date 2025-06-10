@extends('template')

@section('content')
	<h3>Edit Roti</h3>

	<a href="/roti" class="btn btn-info"> Kembali</a>

	<br/>
	<br/>

	@foreach($roti as $r)
	<form action="/roti/update" method="post">
		{{ csrf_field() }}
		<input type="hidden" name="id" value="{{ $r->roti_id }}"> <br/>
        <div class="row">
            <div class="col-3">
                Merk Roti
            </div>
            <div class="col-8">
                <input type="text" name="merkroti" required="required" class="form-control" value="{{ $r->roti_merkroti }}"">
            </div>
        </div>
        <br/>

        <div class="row">
            <div class="col-3">
                Harga Roti
            </div>
            <div class="col-8">
                <input type="number" name="hargaroti" required="required" class="form-control" value="{{ $r->roti_hargaroti }}"">
            </div>
        </div>
        <br/>

        <div class="form-group row">
            <label class="col-3 col-form-label" for="tersedia">Tersedia</label>
            <div class="col-9">
                <input type="hidden" name="tersedia" value="0">
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="tersedia" name="tersedia" value="1"
                        {{ $r->roti_tersedia == 1 ? 'checked' : '' }}>
                    <label class="custom-control-label" for="tersedia">Centang jika tersedia</label>
                </div>
            </div>
        </div>
        <br/>

        <div class="row">
            <div class="col-3">
                Berat
            </div>
            <div class="col-8">
                <input type="number" step="any" id="float-input" name="berat" required="required" class="form-control" value="{{ $r->roti_berat }}">
            </div>
        </div>
        <br/>
		<input type="submit" value="Simpan Data" class="btn btn-success">
	</form>
	@endforeach

@endsection
