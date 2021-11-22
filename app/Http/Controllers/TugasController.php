<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class TugasController extends Controller
{
    public function index()
    {

        $tabeltugas = DB::table('tabeltugas')->get();


        return view('tabeltugas.index', ['tabeltugas' => $tabeltugas]);
    }


    public function tambah()
    {
        return view('tabeltugas.tambah');
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

        $tugas = DB::table('tabeltugas')->where('ID', $id)->get();

        return view('tabeltugas.edit', ['tabeltugas' => $tugas]);
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
