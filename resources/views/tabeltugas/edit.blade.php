@extends('layout.ceria')

@section('title', 'EDIT TABEL')

@section('isikonten')

	<h3>Edit Tabel</h3>

	<a href="/tabeltugas"> Kembali</a>

	<br/>
	<br/>

	@foreach($tabeltugas as $t)
	<form action="/tabeltugas/update" method="post">
		{{ csrf_field() }}
		<input type="hidden" name="id" value="{{ $t->ID }}"> <br/>
		ID Pegawai <input type="text" required="required" name="idpegawai" value="{{ $t->IDPegawai}}"> <br/>
		Tanggal (Format : YYYY-MM-DD hh:mm:ss) <input type="text" required="required" name="tgl" value="{{ $t->Tanggal }}"> <br/>
		Nama Tugas <input type="text" required="required" name="namatgs" value="{{ $t->NamaTugas }}"> <br/>
		Status (1 Huruf/Angka)<input type="text" required="required" name="status" value="{{ $t->Status }}"><br/>
		<input type="submit" value="Simpan Data">
	</form>
	@endforeach


@endsection
