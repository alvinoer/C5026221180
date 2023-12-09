@extends('master2')
@section('judulhalaman', 'Data Lampu')

@section('konten')
    <br/>
	<h3>Data Lampu</h3>

	<a href="/lampu/tambah" class="btn btn-primary"> + Tambah Lampu Baru</a>

	<br/>
    <p>Cari Data Lampu :</p>
	<form action="/lampu/cari" method="GET">
		<input class="form-control" type="text" name="cari" placeholder="Cari Merk Lampu .."
        value="{{ old("cari", isset($cari) ? $cari : '') }}">
        <br/>
		<input type="submit" value="CARI" class="btn btn-info">
	</form>
	<br/>

	<table class="table table-striped table-hover" style="width: 100%">
		<tr>
			<th style="width: 15%">Kode Lampu</th>
			<th style="width: 30%">Merk</th>
			<th style="width: 17%">Stok</th>
			<th style="width: 17%">Status</th>
			<th>Opsi</th>
		</tr>
		@foreach($lampu as $l)
		<tr>
			<td>{{ $l->kodelampu }}</td>
			<td>{{ $l->merklampu }}</td>
			<td>{{ $l->stocklampu }}</td>
			<td>
                @if ($l->tersedia == 0) Tidak Tersedia
                @elseif ($l->tersedia == 1) Tersedia
                @endif
            </td>
			<td>
                <a href="/lampu/view/{{ $l->kodelampu }}" class="btn btn-info">View</a>
                |
				<a href="/lampu/edit/{{ $l->kodelampu }}" class="btn btn-warning">Edit</a>
				|
				<a href="/lampu/hapus/{{ $l->kodelampu }}" class="btn btn-danger">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>


@endsection
