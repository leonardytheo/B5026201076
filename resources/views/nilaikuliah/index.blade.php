@extends('layout.ceria')

@section('judulhalaman', 'Data Nilai Kuliah')

@section('isikonten')


	<a href="/nilaikuliah/tambah" class="btn btn-primary" > + Tambah Data Nilai Kuliah</a>

	<br/>
	<br/>
    <form action="/nilaikuliah/cari" method="GET">
		<input type="text" name="cari" placeholder="Cari NRP .." value="{{ old('cari') }}">
		<input type="submit" value="CARI">
	</form>
	<table class="table table-success table-striped">
		<tr>
            <th>ID</th>
			<th>NRP</th>
			<th>Nilai Angka</th>
			<th>SKS</th>
            <th>Nilai Huruf</th>
            <th>Bobot</th>
            <th>Opsi</th>
		</tr>
		@foreach($nilaikuliah as $n)
		<tr>
            <td>{{ $n->ID }}</td>
			<td>{{ $n->NRP }}</td>
			<td>{{ $n->NilaiAngka}}</td>
			<td>{{ $n->SKS }}</td>
            <td><?php if($n->NilaiAngka <=40){
                echo "D";
            }else if($n->NilaiAngka >=41 && $n->NilaiAngka <=60){
                echo "C";
            }else if($n->NilaiAngka >=61 && $n->NilaiAngka <=80){
                echo "C";
            }else{
                echo"A";
            }
        ?></td>
            <td><?php $bobot=$n->NilaiAngka*$n->SKS;
            echo $bobot;
            ?></td>
			<td>
                <a href="/nilaikuliah/detail/{{ $n->ID }}" class="btn btn-info">View Detail </a>
                |
				<a href="/nilaikuliah/edit/{{ $n->ID }}" class="btn btn-warning" >Edit</a>
				|
				<a href="/nilaikuliah/hapus/{{ $n->ID }}" class="btn btn-danger" >Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>

    {{ $nilaikuliah->links() }}

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

@endsection
