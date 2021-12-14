<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class TugasController extends Controller
{
    public function index()
    {

        //$tabeltugas = DB::table('tabeltugas')->get();
        $tabeltugas = DB::table('tabeltugas')
        ->join('pegawai', 'tabeltugas.IDPegawai', '=', 'pegawai.pegawai_id')
        ->select('tabeltugas.*', 'pegawai.pegawai_nama')
        ->paginate(5);


        return view('tabeltugas.index', ['tabeltugas' => $tabeltugas]);
    }


    public function tambah()
    {
        $pegawai = DB::table('pegawai')->orderBy('pegawai_nama', 'asc')->get();
        return view('tabeltugas.tambah',['pegawai' => $pegawai]);
    }


    public function store(Request $request)
    {

        DB::table('tabeltugas')->insert([
            'IDPegawai' => $request->idpegawai,
            'Tanggal' => $request->tgl,
            'NamaTugas' => $request->namatgs,
            'Status' => $request->status
        ]);

        return redirect('/tabeltugas');
    }


    public function edit($id)
    {
        $pegawai = DB::table('pegawai')->orderBy('pegawai_nama', 'asc')->get();
        $tabeltugas = DB::table('tabeltugas')->where('ID', $id)->get();

        return view('tabeltugas.edit', ['tabeltugas' => $tabeltugas],['pegawai' => $pegawai]);
    }


    public function update(Request $request)
    {

        DB::table('tabeltugas')->where('ID', $request->id)->update([
            'IDPegawai' => $request->idpegawai,
            'Tanggal' => $request->tgl,
            'NamaTugas' => $request->namatgs,
            'Status' => $request->status
        ]);

        return redirect('/tabeltugas');
    }


    public function hapus($id)
    {

        DB::table('tabeltugas')->where('ID', $id)->delete();


        return redirect('/tabeltugas');
    }
}
