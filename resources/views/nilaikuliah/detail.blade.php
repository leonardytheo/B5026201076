@extends('layout.ceria')

@section('judulhalaman', 'Detail Data Nilai Kuliah')

@section('isikonten')

@foreach($nilaikuliah as $n)

	<form action="/nilaikuliah/update" method="post">
		{{ csrf_field() }}
		<input type="hidden" name="id" value="{{ $n->ID }}"> <br/>
        <div class="form-group row">
            <label class="col-sm-2" for="NRP">NRP </label>
            <div class="col-sm-10">
                <label name="NRP">{{ $n->NRP }}</label>
            </div>
        </div>

        <div class="form-group row">
            <label class="col-sm-2" for="nilaiangka"> Nilai Angka </label>
            <div class="col-sm-10">
                <label name="nilaiangka">{{ $n->NilaiAngka }}</label>
            </div>
        </div>

        <div class="form-group row">
            <label class="col-sm-2" for="sks"> SKS </label>
            <div class="col-sm-10">
                <label name="sks">{{ $n->SKS }}</label>
            </div>
        </div>

		<div class="d-flex text-center">
            <a href="/nilaikuliah" class="btn btn-info"> Kembali </a>
        </div>
	</form>
	@endforeach

    @endsection
