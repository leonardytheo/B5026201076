<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('praktikum1', function () {
    return view('prak1web');
});

Route::get('tugas4', function () {
    return view('tugas4jquery');
});

Route::get('praktikum2','ViewController@showPraktikum2');

Route::get('ets','ViewController@showETS');

Route::get('grehtml','ViewController@showTugasPHP');
Route::get('grephp','ViewController@resultTugasPHP');

//route CRUD
Route::get('/pegawai','PegawaiController@index');

//route untuk membuat data
Route::get('/pegawai/tambah','PegawaiController@tambah');

//route untuk menambah data ke tampilan awal
Route::post('/pegawai/store','PegawaiController@store');

//route untuk mengedit data
Route::get('/pegawai/edit/{id}','PegawaiController@edit');

//route untuk mengupdate data
Route::post('/pegawai/update','PegawaiController@update');

//route untuk menghapus data
Route::get('/pegawai/hapus/{id}','PegawaiController@hapus');

//route untuk searching data
Route::get('/pegawai/cari','PegawaiController@cari');

//route untuk view data
Route::get('/pegawai/detail/{id}','PegawaiController@view');


//Tugas tabel
Route::get('/tabeltugas','TugasController@index');

Route::get('/tabeltugas/tambah','TugasController@tambah');

Route::post('/tabeltugas/store','TugasController@store');

Route::get('/tabeltugas/edit/{id}','TugasController@edit');

Route::post('/tabeltugas/update','TugasController@update');

Route::get('/tabeltugas/hapus/{id}','TugasController@hapus');


//Absen
Route::get('/absen','AbsenController@index');
Route::get('/absen/tambah','AbsenController@tambah');
Route::post('/absen/store','AbsenController@store');
Route::get('/absen/edit/{id}','AbsenController@edit');
Route::post('/absen/update','AbsenController@update');
Route::get('/absen/hapus/{id}','AbsenController@hapus');

//flashdisk
Route::get('/flashdisk','FlashdiskController@index');
Route::get('/flashdisk/tambah','FlashdiskController@tambah');
Route::post('/flashdisk/store','FlashdiskController@store');
Route::get('/flashdisk/edit/{id}','FlashdiskController@edit');
Route::post('/flashdisk/update','FlashdiskController@update');
Route::get('/flashdisk/hapus/{id}','FlashdiskController@hapus');
Route::get('/flashdisk/cari','FlashdiskController@cari');
Route::get('/flashdisk/detail/{id}','FlashdiskController@view');
