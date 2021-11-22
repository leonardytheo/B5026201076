<!DOCTYPE html>
<html>
<head>
	<title>Tabel Tugas</title>
</head>
<body>

	<h3>Data Tugas</h3>

	<a href="/tabeltugas"> Kembali</a>

	<br/>
	<br/>

	<form action="/tabeltugas/store" method="post">
		{{ csrf_field() }}
		ID Pegawai <input type="number" name="idpegawai" required="required"> <br/>
		Tanggal (Format : YYYY-MM-DD hh:mm:ss)<input type="datetime" name="tgl" required="required"> <br/>
		Nama Tugas <input type="text" name="namatgs" required="required"> <br/>
		Status (1 Huruf/Angka)<input type="text" name="status" required="required"> <br/>
		<input type="submit" value="Simpan Data">
	</form>

</body>
</html>
