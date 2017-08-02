@extends('layouts.app')
@section('content')
<div class="container">
<div class="row">
	<center><h1>Data Buku</h1></center>
	<div class="panel panel-primary">
		<div class="panel-heading">Data Buku
		<div class="panel-title pull-right"><a href="/book/create">Tambah Data</a></div>
		</div>
		<div class="panel-body">
			<table class="table">
				<thead>
					<tr>
						<th>Title</th>
						<th>Author_Id</th>
						<th>Amount</th>
						<th>Cover</th>
						<th colspan="3">Action</th>
					</tr>
				</thead>
				<tbody>
					@foreach($book as $data)
					<tr>
						<td>{{$data->title}}</td>
						<td>{{$data->author->name}}</td>
						<td>{{$data->amount}}</td>
						<td><img src="{{asset('/img/'.$data->cover.'')}}" width="70" height="70"></td>
						<td>
							<a class="btn btn-warning" href="/book/{{$data->id}}/edit">Edit</a> 
						</td>
						<td>
							<a class="btn btn-info" href="/book/{{$data->id}}">Show</a> 
						</td>
						<td> 
							<form action="{{route('book.destroy',$data->id)}}" method="post">
								<input name="_method" type="hidden" value="DELETE">
								<input name="_token" type="hidden">
								<input class="btn btn-danger" type="submit" value="Delete">
								{{csrf_field()}}
							</form>
						</td>
					</tr>
					@endforeach
				</tbody>
			</table>
		</div>
</div>
	</div>
</div>
@endsection