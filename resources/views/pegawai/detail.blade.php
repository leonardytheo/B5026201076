@extends('layout.ceria')

@section('title', 'Tutorial Membuat CRUD Pada Laravel - www.malasngoding.com')

@section('isikonten')


	<h2><a href="https://www.malasngoding.com">www.malasngoding.com</a></h2>
	<h3>Detail Pegawai</h3>

	<a href="/pegawai"> Kembali</a>

	<br/>
	<br/>

	@foreach($pegawai as $p)

		{{ csrf_field() }}
		Nama : <label  name="nama"> {{ $p->pegawai_nama }}</label> <br/>
		Jabatan : <label required="required" name="jabatan"> {{ $p->pegawai_jabatan }}</label> <br/>
		Umur : <label required="required" name="umur"> {{ $p->pegawai_umur }}</label> <br/>
		Alamat : <label required="required" name="alamat">{{ $p->pegawai_alamat }}</label> <br/>

	@endforeach


@endsection
