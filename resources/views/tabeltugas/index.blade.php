<!DOCTYPE html>
<html>
<head>
	<title>Tabel Tugas</title>
</head>
<body>

	<h3>Data Tugas</h3>

	<a href="/tabeltugas/tambah"> + Tambah Data Tugas</a>

	<br/>
	<br/>

	<table border="1">
		<tr>
			<th>ID Pegawai</th>
			<th>Tanggal</th>
			<th>Nama Tugas</th>
			<th>Status</th>
			<th>Opsi</th>
		</tr>
		@foreach($tabeltugas as $t)
		<tr>
			<td>{{ $t->IDPegawai }}</td>
			<td>{{ $t->Tanggal }}</td>
			<td>{{ $t->NamaTugas }}</td>
			<td>{{ $t->Status }}</td>
			<td>
				<a href="/tabeltugas/edit/{{ $t->ID }}">Edit</a>
				|
				<a href="/tabeltugas/hapus/{{ $t->ID }}">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>


</body>
</html>
