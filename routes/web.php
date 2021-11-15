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
