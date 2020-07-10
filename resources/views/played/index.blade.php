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

	<center><h3>DAFTAR PLAYED</h3></center>
		<center><a href="{{ url('played/create') }}">Tambah Data Played</a></center>

	<table class="table table-striped">
		<tr class="table-active">
			<td>Id Track</td>
			<td>Play Date</td>
			<td>Edit</td>
			<td>Delete</td>
		</tr>
		@foreach($played as $row)
		<tr>
			<td>{{ $row->track->track_name }}</td>
			<td>{{ $row->play_date }}</td>
			<td><a href="{{ url('played/' . $row->play_id. '/edit') }}">Edit</a></td>

			<td>
				<form action="{{ url('played/' . $row->play_id) }}" method="POST">
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