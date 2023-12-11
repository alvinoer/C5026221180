@extends('master2')
@section('judulhalaman', 'Kategori')

@section('konten')

@foreach($kategori as $k)
    <br/>
	<h3>Anda telah memilih Kategori dengan Kode : {{ $k->ID }}</h3>

	<br/>
	<br/>
@endforeach

@endsection
