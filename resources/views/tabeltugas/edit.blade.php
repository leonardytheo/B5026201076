@extends('layout.ceria')

@section('title', 'EDIT TABEL')

@section('isikonten')

	<h3>Edit Tabel</h3>

	<a href="/tabeltugas"> Kembali</a>

	<br/>
	<br/>

	@foreach($tabeltugas as $t)
	<form class="form-horizontal" action="/tabeltugas/update" method="post">
		{{ csrf_field() }}
        <input type="hidden" name="id" value="{{ $t->ID }}"> <br/>
        <div class="form-group">
		    <label class="col-sm-2 control-label">Pegawai :</label>
                <div class="col-sm-3">
                    <select class="form-control" id="idpegawai" name="idpegawai" required="required">
                        @foreach($pegawai as $p)
                            <option value="{{ $p->pegawai_id }}" @if ($p->pegawai_id === $t->IDPegawai) selected="selected" @endif> {{ $p->pegawai_nama }}</option>
                        @endforeach
                    </select>
                </div>
        </div><br>
        <div class="form-group">
		    <label class="col-sm-2 control-label">Nama Tugas :</label>
                <div class="col-sm-3">
                    <input class="form-control"type="text" name="namatgs" required="required" value="{{ $t->NamaTugas }}">
                </div>
        </div>
            <div class="form-group">
                <label for="dtpickerdemo" class="col-sm-2 control-label">Tanggal :</label>
                <div class="col-sm-6">
                    <div class='col-sm-6 input-group date ' id='dtpickerdemo'>
                        <input type='text' class="form-control" name="tgl" value="{{ $t->Tanggal }}">
                        <span class="input-group-addon">
                            <span class="glyphicon glyphicon-calendar"></span>
                        </span>
                    </div>
                </div>
            </div>
                <script type="text/javascript">
                    $(function () {
                        $('#dtpickerdemo').datetimepicker({format : "YYYY-MM-DD hh:mm", "defaultDate":new Date() });
                    });
                </script>
                <br>
            <div class="form-group">
                <label class="col-sm-2 control-label">Status :</label>
                <div class="col-sm-5">
                    <label class="radio-inline">
                        <input type="radio" id="hadir" name="status" value="H" @if ($t->Status === "H") checked="checked" @endif>
                        <label for="hadir">SELESAI</label></label><br>
                        <label class="radio-inline">
                        <input type="radio" id="tidak" name="status" value="T" @if ($t->Status === "T") checked="checked" @endif>
                        <label for="tidak">BELUM</label></label><br><br>
                    <a href="/tabeltugas" class="btn btn-primary"> Kembali</a>
		            <input type="submit" class="btn btn-primary" value="Simpan Data">
                </div>
            </div>

	</form>
	@endforeach


@endsection
