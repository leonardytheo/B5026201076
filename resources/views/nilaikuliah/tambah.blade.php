@extends('layout.ceria')

@section('judulhalaman', 'Tambah Data Nilai Kuliah')

@section('isikonten')


<form action="/nilaikuliah/store" method="post">
    {{ csrf_field() }}
    <div class="form-group row">
        <label class="col-sm-2" for="nrp">NRP </label>
        <div class="col-sm-10">
            <input type="text"  class="form-control" name="nrp" required="required">
        </div>
    </div>

    <div class="form-group row">
        <label class="col-sm-2" for="nilaiangka"> Nilai Angka </label>
        <div class="col-sm-10">
            <input type="text"  class="form-control" name="nilaiangka" required="required">
        </div>
    </div>

    <div class="form-group row">
        <label class="col-sm-2" for="sks"> SKS </label>
        <div class="col-sm-10">
            <input type="text"  class="form-control" name="sks" required="required">
        </div>
    </div>

    <div class="d-flex text-center">
             <button type="submit" class="btn btn-success"> Simpan Data </button>
             <a href="/nilaikuliah" class="btn btn-info"> Kembali </a>
    </div>

</form>

@endsection
