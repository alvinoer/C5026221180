<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/tugas-1', function () {
    return view('tugas1') ;
});

Route::get('/tugas-2', function () {
    return view('tugas2') ;
});

Route::get('/tugas-3', function () {
    return view('tugas3') ;
});

Route::get('/tugas-4', function () {
    return view('tugas4') ;
});

Route::get('/tugas-5', function () {
    return view('tugas5') ;
});

Route::get('/tugas-6', function () {
    return view('tugas6') ;
});

Route::get('/blog2', function () {
    return view('blog') ;
});

Route::get('/blog', function () {
    return view('home');
});

Route::get('/blog/tentang', function () {
    return view('tentang');
});

Route::get('/blog/kontak', function () {
    return view('kontak');
});

Route::get('/perkalian', 'App\Http\Controllers\DosenController@index');

Route::get('/biodata', 'App\Http\Controllers\DosenController@biodata');

Route::get('/showjam/{jam}', 'App\Http\Controllers\DosenController@showtime');

Route::get('/formulir', 'App\Http\Controllers\DosenController@formulir');

Route::post('/formulir/proses', 'App\Http\Controllers\DosenController@proses');

//route CRUD
Route::get('/pegawai','App\Http\Controllers\PegawaiController@index');

Route::get('/pegawai/tambah','App\Http\Controllers\PegawaiController@tambah');

Route::post('/pegawai/store','App\Http\Controllers\PegawaiController@store');

Route::get('/pegawai/edit/{id}','App\Http\Controllers\PegawaiController@edit');

Route::post('/pegawai/update','App\Http\Controllers\PegawaiController@update');

Route::get('/pegawai/hapus/{id}','App\Http\Controllers\PegawaiController@hapus');

Route::get('/pegawai/cari','App\Http\Controllers\PegawaiController@cari');

Route::get('/pegawai/view/{id}','App\Http\Controllers\PegawaiController@view');
