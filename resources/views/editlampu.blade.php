@extends('master2')
@section('judulhalaman', 'Edit Data Lampu')

@section('konten')

    <br/>
	<h3>Edit Data Lampu</h3>

	<a href="/lampu" class="btn btn-primary"> Kembali</a>

	<br/>
	<br/>

	@foreach($lampu as $l)
	<form action="/lampu/update" method="post">
		{{ csrf_field() }}
		<input type="hidden" name="id" value="{{ $l->kodelampu }}"> <br/>
        <div class="form-group row">
            <label for="inputmerk" class="col-sm-2 col-form-label">Merk</label>
            <div class="col-sm-10">
                <input type="text" name="merk" class="form-control" id="inputmerk" value="{{ $l->merklampu }}">
            </div>
        </div>
        <div class="form-group row">
            <label for="inputstock" class="col-sm-2 col-form-label">Stock</label>
            <div class="col-sm-10">
                <input type="number" name="stock" class="form-control" id="inputstock" value="{{ $l->stocklampu }}">
            </div>
        </div>
        <input type="submit" value="Simpan Data" class="btn btn-info">
	</form>
	@endforeach

@endsection
