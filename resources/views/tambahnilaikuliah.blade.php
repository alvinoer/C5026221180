@extends('master2')
@section('judulhalaman', 'Tambah Nilai Kuliah')

@section('konten')

    <br/>
	<h3>Tambah Nilai Kuliah</h3>

	<a href="/nilaikuliah" class="btn btn-primary"> Kembali</a>

	<br/>
	<br/>

	<form action="/nilaikuliah/store" method="post">
		{{ csrf_field() }}
		<div class="form-group row">
            <label for="inputnrp" class="col-sm-2 col-form-label">NRP</label>
            <div class="col-sm-10">
                <input type="number" name="nrp" class="form-control" id="inputnrp">
            </div>
        </div>
        <div class="form-group row">
            <label for="inputnilaiAngka" class="col-sm-2 col-form-label">Nilai Angka</label>
            <div class="col-sm-10">
                <input type="number" name="nilaiAngka" class="form-control" id="inputnilaiAngka">
            </div>
        </div>
        <div class="form-group row">
            <label for="inputsks" class="col-sm-2 col-form-label">SKS</label>
            <div class="col-sm-10">
                <input type="number" name="sks" class="form-control" id="inputsks">
            </div>
        </div>
		<input type="submit" value="Simpan Data" class="btn btn-info">
	</form>

@endsection
