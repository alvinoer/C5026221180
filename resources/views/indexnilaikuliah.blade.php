@extends('master2')
@section('judulhalaman', 'Nilai Kuliah')

@section('konten')
    <br/>
	<h3>Nilai Kuliah</h3>

	<a href="/nilaikuliah/tambah" class="btn btn-primary"> + Tambah Data</a>
    <br/>
    <br/>
	<table class="table table-striped table-hover">
		<tr>
			<th>ID</th>
			<th>NRP</th>
			<th>Nilai Angka</th>
			<th>SKS</th>
            <th>Nilai Huruf</th>
            <th>Bobot</th>
		</tr>
		@foreach($nilaikuliah as $nk)
		<tr>
			<td>{{ $nk->ID }}</td>
			<td>{{ $nk->NRP }}</td>
			<td>{{ $nk->NilaiAngka }}</td>
			<td>{{ $nk->SKS }}</td>
            <td>
            @if ($nk->NilaiAngka <= 40) D
            @elseif($nk->NilaiAngka >= 41 and $nk->NilaiAngka <= 60) C
            @elseif($nk->NilaiAngka >= 61 and $nk->NilaiAngka <= 80) B
            @elseif($nk->NilaiAngka >= 81) A
            @else Nilai Invalid
            @endif
            </td>
            <td>{{ $nk->NilaiAngka * $nk->SKS }}</td>
		</tr>
		@endforeach
	</table>

@endsection
