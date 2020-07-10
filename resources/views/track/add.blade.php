@extends ('layouts.app')

@section ('content')

<div class="container">
	<center><h3>TAMBAH DATA TRACK</h3></center>
	<form action="{{ url('/track') }}" method="POST">
		@csrf
		<table class="table table-bordered">
			<tr>
				<td>Nama</td>
				<td><input type="text" name="track_name"></td>
			</tr>
			<tr>
				<td>Id Album</td>
				<td><input type="text" name="album_id"></td>
			</tr>
			<tr>
				<td>Time</td>
				<td><input type="text" name="track_time"></td>
			</tr>
			<tr>
				<td>File</td>
				<td><input type="file" name="track_file"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="SIMPAN"></td>
			</tr>
		</table>
	</form>
</div>
@endsection