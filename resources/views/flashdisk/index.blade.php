@extends('layout.ceria')

@section('judulhalaman', 'Data Flashdisk')

@section('isikonten')


	<a href="/flashdisk/tambah" class="btn btn-primary" > + Tambah Data Flashdisk</a>

	<br/>
	<br/>
    <form action="/flashdisk/cari" method="GET">
		<input type="text" name="cari" placeholder="Cari Flashdisk .." value="{{ old('cari') }}">
		<input type="submit" value="CARI">
	</form>
	<table class="table table-success table-striped">
		<tr>
            <th>No</th>
			<th>Merk Flashdisk</th>
			<th>Stock</th>
			<th>Tersedia</th>
            <th>Opsi</th>
		</tr>
		@foreach($flashdisk as $f)
		<tr>
            <td>{{ $loop->iteration }}</td>
			<td>{{ $f->merkflashdisk }}</td>
			<td>{{ $f->stockflashdisk}}</td>
			<td>{{ $f->tersedia }}</td>
			<td>
                <a href="/flashdisk/detail/{{ $f->kodeflashdisk }}" class="btn btn-info">View Detail </a>
                |
				<a href="/flashdisk/edit/{{ $f->kodeflashdisk }}" class="btn btn-warning" >Edit</a>
				|
				<a href="/flashdisk/hapus/{{ $f->kodeflashdisk }}" class="btn btn-danger" >Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>

    {{ $flashdisk->links() }}

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

@endsection
