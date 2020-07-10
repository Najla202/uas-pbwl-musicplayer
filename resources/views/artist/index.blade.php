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

	<center><h3>DAFTAR ARTIS</h3></center>
		<center><a href="{{ url('artist/create') }}">Tambah Data Artis</a></center>

	<table class="table table-striped">
		<tr class="table-active">
			<td>Nama</td>
			<td>Edit</td>
			<td>Delete</td>
		</tr>
		@foreach($rows as $row)
		<tr>
			<td>{{ $row->artist_name }}</td>
			<td><a href="{{ url('artist/' . $row->artist_id. '/edit') }}">Edit</a></td>

			<td>
				<form action="{{ url('artist/' . $row->artist_id) }}" method="POST">
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