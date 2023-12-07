@extends('master2')
@section('judulhalaman', 'Edit Pegawai')

@section('konten')

    <br/>
	<h3>Edit Pegawai</h3>

	<a href="/pegawai" class="btn btn-primary"> Kembali</a>

	<br/>
	<br/>

	@foreach($pegawai as $p)
	<form action="/pegawai/update" method="post">
		{{ csrf_field() }}
		<input type="hidden" name="id" value="{{ $p->pegawai_id }}"> <br/>
        <div class="form-group row">
            <label for="inputnama" class="col-sm-2 col-form-label">Nama</label>
            <div class="col-sm-10">
                <input type="text" required='required' name="nama" class="form-control" id="inputnama" value="{{ $p->pegawai_nama }}">
            </div>
        </div>
        <div class="form-group row">
            <label for="inputjabatan" class="col-sm-2 col-form-label">Jabatan</label>
            <div class="col-sm-10">
                <input type="text" required="required" name="jabatan" class="form-control" id="inputjabatan" value="{{ $p->pegawai_jabatan }}">
            </div>
        </div>
        <div class="form-group row">
            <label for="inputumur" class="col-sm-2 col-form-label">Umur</label>
            <div class="col-sm-10">
                <input type="number" required="required" name="umur" class="form-control" id="inputumur" value="{{ $p->pegawai_umur }}">
            </div>
        </div>
        <div class="form-group row">
            <label for="inputalamat" class="col-sm-2 col-form-label">Alamat</label>
            <div class="col-sm-10">
                <textarea required="required" name="alamat" class="form-control" id="inputalamat">{{ $p->pegawai_alamat }}</textarea>
            </div>
        </div>
        <input type="submit" value="Simpan Data" class="btn btn-info">
	</form>
	@endforeach

@endsection
