@extends('master2')
@section('judulhalaman', 'Kategori')

@section('konten')
    <h4>Pilih Kategori</h4>
    <form action="/kategori/cari" method="GET">
		<select class="custom-select" name="cari">
            @foreach($kategori as $k)
            <option value={{ $k->ID }}>{{ $k->Nama }}</option>
            @endforeach
          </select>
		<input type="submit" value="Kirim" class="btn btn-primary my-1">
	</form>

@endsection
