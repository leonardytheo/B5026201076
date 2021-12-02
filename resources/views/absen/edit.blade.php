@extends('layout.ceria')

@section('title', 'ABSEN PEGAWAI')

@section('isikonten')

@section('judulhalaman', 'EDIT ABSEN')

	@foreach($absen as $p)
	<form class="form-horizontal" action="/absen/update" method="post">
		{{ csrf_field() }}
        <div class="form-group">
		    <input type="hidden" name="id" value="{{ $p->ID }}"> <br/>
            <label class="col-sm-2 control-label"> Pegawai </label>
            <div class="col-sm-3">
                <select class="form-control" id="IDPegawai" name="IDPegawai" required="required">
                    @foreach($pegawai as $peg)
                        <option value="{{ $peg->pegawai_id }}" @if ($peg->pegawai_id === $p->IDPegawai) selected="selected" @endif> {{ $peg->pegawai_nama }}</option>
                    @endforeach
                </select>
            </div>
        </div><br>
        <div class="form-group">
            <label for="dtpickerdemo" class="col-sm-2 control-label">Tanggal :</label>
            <div class="col-sm-6">
                <div class='col-sm-6 input-group date ' id='dtpickerdemo'>
                    <input type='text' class="form-control" name="tanggal" value="{{ $p->Tanggal }}">
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
                    <input type="radio" id="hadir" name="status" value="H" @if ($p->Status === "H") checked="checked" @endif>
                    <label for="hadir">HADIR</label></label><br>
                    <label class="radio-inline">
                    <input type="radio" id="tidak" name="status" value="T" @if ($p->Status === "T") checked="checked" @endif>
                    <label for="tidak">TIDAK HADIR</label></label><br>
                    <a href="/absen" class="btn btn-primary"> Kembali</a>
                    <input type="submit" class="btn btn-primary" value="Simpan Data">
                </div>
            </div>
	</form>
	@endforeach


    @endsection
