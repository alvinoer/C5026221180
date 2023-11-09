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

Route::get('/perkalian', 'App\Http\Controllers\DosenController@index');

Route::get('/biodata', 'App\Http\Controllers\DosenController@biodata');
