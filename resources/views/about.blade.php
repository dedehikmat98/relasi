<!DOCTYPE html>
<html>
<head>
	<title>Halaman About</title>
</head>
<body>
		@foreach($ortu as $data)<hr>
			Nama ayah :{{$data->nama_ayah}}<br>
			Nama ibu :{{$data->nama_ibu}}<br>
			Umur ayah :{{$data->umur_ayah}}<br>
			Umur ibu :{{$data->umur_ibu}}<br>
			Nama Anak :
			@foreach ($data->anak as $key)
			<li>{{ $key->nama }}</li>
		@endforeach
		<hr>
		@endforeach

</body>
</html>