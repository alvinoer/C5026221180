<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class KategoriController extends Controller
{
	public function index()
	{
    	// mengambil data dari table belanja
        $kategori = DB::table('kategori')->get();
    	// mengirim data belanja ke view index
		return view('indexkategori',['kategori' => $kategori]);

	}
    
    public function cari(Request $request)
	{
		// menangkap data pencarian
		$cari = $request->cari;

    		// mengambil data dari table pegawai sesuai pencarian data
		$kategori = DB::table('kategori')
		->where('ID','like',"%".$cari."%")
		->get();

    		// mengirim data pegawai ke view index
		return view('viewkategori',['kategori' => $kategori]);

	}
}
