@extends('layout.ceria')

@section('judulhalaman', 'Edit Data Flashdisk')

@section('isikonten')

@foreach($flashdisk as $f)

	<form action="/flashdisk/update" method="post">
		{{ csrf_field() }}
		<input type="hidden" name="id" value="{{ $f->kodeflashdisk }}"> <br/>
        <div class="form-group row">
            <label class="col-sm-2" for="merkflashdisk">Merk Flashdisk </label>
            <div class="col-sm-10">
                <input type="text" class="form-control" required="required" name="merkflashdisk" value="{{ $f->merkflashdisk }}">
            </div>
        </div>

        <div class="form-group row">
            <label class="col-sm-2" for="stockflashdisk"> Stock Flashdisk </label>
            <div class="col-sm-10">
                <input type="text"  class="form-control" required="required" name="stockflashdisk" value="{{ $f->stockflashdisk }}">
            </div>
        </div>

        <div class="form-group row">
            <label class="col-sm-2" for="tersedia"> Tersedia </label>
            <div class="col-sm-10">
                <input type="radio" id="Ya" name="tersedia" value="Y" @if ($f->tersedia === "Y" ) checked="checked" @endif>
                <label for="Ya">Ya</label><br>
                <input type="radio" id="Tidak" name="tersedia" value="T" @if ($f->tersedia === "T" ) checked="checked" @endif>
                <label for="Tidak">Tidak</label><br>
            </div>
        </div>

		<div class="d-flex text-center">
            <button type="submit" class="btn btn-success"> Simpan Data </button>
            <a href="/flashdisk" class="btn btn-info"> Kembali </a>
        </div>
	</form>
	@endforeach

    @endsection
