<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class LampuController extends Controller
{
	public function index()
	{
    	// mengambil data dari table pegawai
		// $pegawai = DB::table('pegawai')->get();
        $lampu = DB::table('lampu')->get();

    	// mengirim data pegawai ke view index
		return view('indexlampu',['lampu' => $lampu]);

	}

	// method untuk menampilkan view form tambah pegawai
	public function tambah()
	{

		// memanggil view tambah
		return view('tambahlampu');

	}

	// method untuk insert data ke table pegawai
	public function store(Request $request)
	{
        if ($request->stock > 0) $status = 1;
        else $status = 0;

		// insert data ke table pegawai
		DB::table('lampu')->insert([
			'kodelampu' => $request->kode,
			'merklampu' => $request->merk,
			'stocklampu' => $request->stock,
			'tersedia' => $status
		]);
		// alihkan halaman ke halaman pegawai
		return redirect('/lampu');

	}

	// method untuk edit data pegawai
	public function edit($id)
	{
		// mengambil data pegawai berdasarkan id yang dipilih
		$lampu = DB::table('lampu')->where('kodelampu',$id)->get();
		// passing data pegawai yang didapat ke view edit.blade.php
		return view('editlampu',['lampu' => $lampu]);

	}

	// update data pegawai
	public function update(Request $request)
	{
        if ($request->stock > 0) $status = 1;
        else $status = 0;

		// update data pegawai
		DB::table('lampu')->where('kodelampu',$request->id)->update([
			'merklampu' => $request->merk,
			'stocklampu' => $request->stock,
			'tersedia' => $status,
		]);
		// alihkan halaman ke halaman pegawai
		return redirect('/lampu');
	}

	// method untuk hapus data pegawai
	public function hapus($id)
	{
		// menghapus data pegawai berdasarkan id yang dipilih
		DB::table('lampu')->where('kodelampu',$id)->delete();

		// alihkan halaman ke halaman pegawai
		return redirect('/lampu');
	}

    // method cari pegawai
    public function cari(Request $request)
	{
		// menangkap data pencarian
		$cari = $request->cari;

    		// mengambil data dari table pegawai sesuai pencarian data
		$lampu = DB::table('lampu')
		->where('merklampu','like',"%".$cari."%")
		->paginate();

    		// mengirim data pegawai ke view index
		return view('indexlampu',['lampu' => $lampu]);

	}

    public function view($id)
	{
		// mengambil data pegawai berdasarkan id yang dipilih
		$lampu = DB::table('lampu')->where('kodelampu',$id)->get();
		// passing data pegawai yang didapat ke view view.blade.php
        return view('viewlampu',['lampu' => $lampu]);

	}
}
