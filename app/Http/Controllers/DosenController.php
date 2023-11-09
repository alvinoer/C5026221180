<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DosenController extends Controller
{
    //
    public function index(){
        //$ = untuk membuat variabel
        $a = 8;
        $b = 5;
        $c = $a * $b ;
        // . = tanda penggabungan string (kayak + di java)
        return "<h1>Hasil Perkalian = " . $c . "</h1>";
    }

    public function biodata(){
    	$nama = "Diki Alfarabi Hadi";
        $alamat = "Surabaya";
        $umur = 18;
    	return view('biodata',['nama' => $nama, 'alamat' => $alamat, 'umur' => $umur]);
    }
}
