@extends('layout.ceria')

@section('judulhalaman', 'Tambah Data Flashdisk')

@section('isikonten')


<form action="/flashdisk/store" method="post">
    {{ csrf_field() }}
    <div class="form-group row">
        <label class="col-sm-2" for="merkflashdisk">Merk Flashdisk </label>
        <div class="col-sm-10">
            <input type="text"  class="form-control" name="merkflashdisk" required="required">
        </div>
    </div>

    <div class="form-group row">
        <label class="col-sm-2" for="stockflashdisk"> Stock Flashdisk </label>
        <div class="col-sm-10">
            <input type="text"  class="form-control" name="stockflashdisk" required="required">
        </div>
    </div>

    <div class="form-group row">
        <label class="col-sm-2" for="tersedia "> Tersedia </label>
        <div class="col-sm-10">
            <input type="radio" id="Ya" name="tersedia" value="Y">
            <label for="Ya">Ya</label><br>
            <input type="radio" id="Tidak" name="tersedia" value="T">
            <label for="Tidak">Tidak</label><br>
        </div>
    </div>

    <div class="d-flex text-center">
             <button type="submit" class="btn btn-success"> Simpan Data </button>
             <a href="/flashdisk" class="btn btn-info"> Kembali </a>
    </div>

</form>

@endsection
