<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class NilaiController extends Controller
{
    public function index()
    {
        $nilaikuliah = DB::table('nilaikuliah')->paginate(5);
        return view('nilaikuliah.index', ['nilaikuliah' => $nilaikuliah]);
    }

    public function tambah()
    {
        return view('nilaikuliah.tambah');
    }

    public function store(Request $request)
    {
        DB::table('nilaikuliah')->insert([
            'NRP' => $request->nrp,
            'NilaiAngka' => $request->nilaiangka,
            'SKS' => $request->sks
        ]);
        return redirect('/nilaikuliah');
    }


    public function edit($id)
    {
        $nilaikuliah = DB::table('nilaikuliah')->where('ID', $id)->get();
        return view('nilaikuliah.edit', ['nilaikuliah' => $nilaikuliah]);
    }

    public function update(Request $request)
    {
        DB::table('nilaikuliah')->where('ID', $request->id)->update([
            'NRP' => $request->nrp,
            'NilaiAngka' => $request->nilaiangka,
            'SKS' => $request->sks
        ]);
        return redirect('/nilaikuliah');
    }

    public function hapus($id)
    {
        DB::table('nilaikuliah')->where('ID', $id)->delete();
        return redirect('/nilaikuliah');
    }

    public function cari(Request $request)
	{
		$cari = $request->cari;
		$nilaikuliah = DB::table('nilaikuliah')
		->where('NRP','like',"%".$cari."%")
		->paginate(5);
		return view('nilaikuliah.index',['nilaikuliah' => $nilaikuliah]);
	}

    public function view($id)
    {

	$nilaikuliah = DB::table('nilaikuliah')->where('ID',$id)->get();
	return view('nilaikuliah.detail',['nilaikuliah' => $nilaikuliah]);

    }
}
