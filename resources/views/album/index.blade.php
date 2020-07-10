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

	<center><h3>DAFTAR ALBUM</h3></center>
		<center><a href="{{ url('album/create') }}">Tambah Data Album</a></center>

	<table class="table table-striped">
		<tr class="table-active">
			<td>Nama</td>
			<td>Id Artist</td>
			<td>Edit</td>
			<td>Delete</td>
		</tr>
		@foreach($album as $row)
		<tr>
			<td>{{ $row->album_name }}</td>
			<td>{{ $row->artist->artist_name }}</td>
			<td><a href="{{ url('album/' . $row->album_id. '/edit') }}">Edit</a></td>

			<td>
				<form action="{{ url('album/' . $row->album_id) }}" method="POST">
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