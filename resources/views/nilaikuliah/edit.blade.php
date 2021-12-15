@extends('layout.ceria')

@section('judulhalaman', 'Edit Data Nilai Kuliah')

@section('isikonten')

@foreach($nilaikuliah as $n)

	<form action="/nilaikuliah/update" method="post">
		{{ csrf_field() }}
		<input type="hidden" name="id" value="{{ $n->ID }}"> <br/>
        <div class="form-group row">
            <label class="col-sm-2" for="nrp">NRP </label>
            <div class="col-sm-10">
                <input type="text"  class="form-control" name="nrp" required="required" value="{{ $n->NRP }}">
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-2" for="nilaiangka"> Nilai Angka </label>
            <div class="col-sm-10">
                <input type="text"  class="form-control" name="nilaiangka" required="required" value="{{ $n->NilaiAngka}}">
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-2" for="sks"> SKS </label>
            <div class="col-sm-10">
                <input type="text"  class="form-control" name="sks" required="required" value="{{ $n->SKS }}">
            </div>
        </div>

		<div class="d-flex text-center">
            <button type="submit" class="btn btn-success"> Simpan Data </button>
            <a href="/nilaikuliah" class="btn btn-info"> Kembali </a>
        </div>
	</form>
	@endforeach

    @endsection
