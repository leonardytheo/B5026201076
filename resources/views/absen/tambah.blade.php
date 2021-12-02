@extends('layout.ceria')

@section('title', 'ABSEN PEGAWAI')

@section('isikonten')

@section('judulhalaman', 'ABSEN PEGAWAI')

	<h2><a href="https://www.malasngoding.com"></a></h2>

	<br/>
	<br/>

	<form class="form-horizontal" action="/absen/store" method="post">
		{{ csrf_field() }}
        <div class="form-group">
		    <label class="col-sm-2 control-label">Pegawai :</label>
                <div class="col-sm-3">
        <select class="form-control" id="IDPegawai"  name="IDPegawai" required="required">
            @foreach($pegawai as $p)
                <option value="{{ $p->pegawai_id }}"> {{ $p->pegawai_nama }}</option>
            @endforeach
        </select>
        </div>
        </div>
        </div><br>
            <div class="form-group">
                <label for="dtpickerdemo" class="col-sm-2 control-label">Tanggal :</label>
                <div class="col-sm-6">
                    <div class='col-sm-6 input-group date ' id='dtpickerdemo'>
                        <input type='text' class="form-control" name="tanggal" />
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
                    <input type="radio" id="hadir" name="status" value="H">
                    <label for="hadir">HADIR</label></label><br>
                    <label class="radio-inline">
                    <input type="radio" id="tidak" name="status" value="T" checked="checked">
                    <label for="tidak">TIDAK HADIR</label></label><br>
                    <a href="/absen" class="btn btn-primary"> Kembali</a>
		            <input type="submit" class="btn btn-primary" value="Simpan Data">
                </div>
            </div>
	</form>

@endsection

