@extends('layouts.app')
@section('content')
<div class="container">
<div class="row">
	<center><h1>Data Anak</h1></center>
	<div class="panel-panel-primary">
		<div class="panel-headling">Data Anak
		<div class="panel-title pull-right">
		<a href="{{URL::previous() }}">Kembali</a></div>
		</div>
		<div class="panel-body">
			<form >
				<div class="form-group">
					<label class="control-lable">Nama</label>
					<input type="text" name="a" value="{{$anak->nama}}" class="form-control" readonly="">
				</div>
				<div class="form-group">
					<label class="control-lable">Nama Orangtua</label>
					<input type="text" class="form-control" name="b" value="{{$anak->orangtua->nama_ayah}} dan {{$anak->orangtua->nama_ibu}}" readonly="">
					</input>
				</div>
				<div class="form-group">
					<label class="control-lable">Umur</label>
					<input type="number" name="c" value="{{$anak->umur}}" class="form-control" required="" readonly="">
				</div>
				<div class="form-group">
					<label class="control-lable">Alamat</label>
					<textarea class="form-control" rows="10" name="d" required="" readonly="">{{$anak->alamat}}</textarea>
				</div>
			</form>
		</div>
	</div>
</div>
</div>
@endsection