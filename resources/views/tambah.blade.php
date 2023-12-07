@extends('master2')
@section('judulhalaman', 'Tambah Pegawai')

@section('konten')

    <br/>
	<h3>Tambah Pegawai</h3>

	<a href="/pegawai" class="btn btn-primary"> Kembali</a>

	<br/>
	<br/>

	<form action="/pegawai/store" method="post">
		{{ csrf_field() }}
		<div class="form-group row">
            <label for="inputnama" class="col-sm-2 col-form-label">Nama</label>
            <div class="col-sm-10">
                <input type="text" name="nama" class="form-control" id="inputnama">
            </div>
        </div>
        <div class="form-group row">
            <label for="inputjabatan" class="col-sm-2 col-form-label">Jabatan</label>
            <div class="col-sm-10">
                <input type="text" name="jabatan" class="form-control" id="inputjabatan">
            </div>
        </div>
        <div class="form-group row">
            <label for="inputumur" class="col-sm-2 col-form-label">Umur</label>
            <div class="col-sm-10">
                <input type="number" name="umur" class="form-control" id="inputumur">
            </div>
        </div>
        <div class="form-group row">
            <label for="inputalamat" class="col-sm-2 col-form-label">Alamat</label>
            <div class="col-sm-10">
                <textarea name="alamat" class="form-control" id="inputalamat">Masukkan Alamat Anda</textarea>
            </div>
        </div>
		<input type="submit" value="Simpan Data" class="btn btn-info">
	</form>

@endsection
