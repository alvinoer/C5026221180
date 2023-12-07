@extends('master2')
@section('judulhalaman', 'Informasi Pegawai')

@section('konten')

    <br/>
	<h3>Informasi Pegawai</h3>

	<br/>
	<br/>

	@foreach($pegawai as $p)
    <div class="container-fluid">
    <div class="row">
        <div class="col-sm-5">

        </div>
        <div class="col-sm-7">
            <br/>
                <div class="row">
                    <div class="col-sm-2">Nama</div>
                    <div class="col-sm-10">: {{ $p->pegawai_nama }}</div>
                </div>
                <br/>
                <div class="row">
                    <div class="col-sm-2">Jabatan</div>
                    <div class="col-sm-10">: {{ $p->pegawai_jabatan }}</div>
                </div>
                <br/>
                <div class="row">
                    <div class="col-sm-2">Umur</div>
                    <div class="col-sm-10">: {{ $p->pegawai_umur }}</div>
                </div>
                <br/>
                <div class="row">
                    <div class="col-sm-2">Alamat</div>
                    <div class="col-sm-10">: {{ $p->pegawai_alamat }}</div>
                </div>
                <br/>
                <div class="row">
                    <div class="col-sm-5"></div>
                    <div class="col-sm-2 text-center">
                    <a href="/pegawai" class="btn btn-block btn-primary">Done</a>
                    </div>
                </div>
        </div>
    </div>
    </div>

	@endforeach

@endsection
