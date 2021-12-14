@extends('layout.ceria')

@section('judulhalaman', 'Detail Data Flashdisk')

@section('isikonten')

@foreach($flashdisk as $f)

	<form action="/flashdisk/update" method="post">
		{{ csrf_field() }}
		<input type="hidden" name="id" value="{{ $f->kodeflashdisk }}"> <br/>
        <div class="form-group row">
            <label class="col-sm-2" for="merkflashdisk">Merk Flashdisk </label>
            <div class="col-sm-10">
                <label name="merkflashdisk">{{ $f->merkflashdisk }}</label>
            </div>
        </div>

        <div class="form-group row">
            <label class="col-sm-2" for="stockflashdisk"> Stock Flashdisk </label>
            <div class="col-sm-10">
                <label name="stockflashdisk">{{ $f->stockflashdisk }}</label>
            </div>
        </div>

        <div class="form-group row">
            <label class="col-sm-2" for="tersedia"> Tersedia </label>
            <div class="col-sm-10">
                <label name="tersedia">@if($f->tersedia == 'Y') Ya @else Tidak @endif</label>
            </div>
        </div>

		<div class="d-flex text-center">
            <a href="/flashdisk" class="btn btn-info"> Kembali </a>
        </div>
	</form>
	@endforeach

    @endsection
