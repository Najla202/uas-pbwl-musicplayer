@extends('layouts.app')

@section('content')

<!DOCTYPE html>
<html>
<head>
	<style>
		html, body {
			background-color: #F0FFF0;
			color: black;
			font-family: 'Nunito', sans-serif;
			font-weight: 200;
			height: 100vh;
			margin: 0;
		}
	</style>
</head>
<body>
</body>
</html>

<div class="container">

	<center><h3>DAFTAR TRACK</h3></center>
		<center><a href="{{ url('track/create') }}">Tambah Data Track</a></center>

	<table class="table table-striped">
		<tr class="table-active">
			<td>Nama</td>
			<td>Id Album</td>
			<td>Time</td>
			<td>File</td>
			<td>Edit</td>
			<td>Delete</td>
		</tr>
		@foreach($track as $row)
		<tr>
			<td>{{ $row->track_name }}</td>
			<td>{{ $row->album->album_name }}</td>
			<td>{{ $row->track_time }}</td>
			<td>{{ $row->track_file }}</td>
			<td><a href="{{ url('track/' . $row->track_id. '/edit') }}">Edit</a></td>

			<td>
				<form action="{{ url('track/' . $row->track_id) }}" method="POST">
					<input type="hidden" name="_method" value="DELETE">
					@csrf
					<button>Hapus</button>
				</form>
			</td>
		</tr>
		@endforeach
	</table>
</div>
@endsection