@extends ('layouts.app')

@section ('content')

<div class="container">
	<center><h3>TAMBAH DATA ALBUM</h3></center>
	<form action="{{ url('/album') }}" method="POST">
		@csrf
		<table class="table table-bordered">
			<tr>
				<td>Nama</td>
				<td><input type="text" name="album_name"></td>
			</tr>
			<tr>
				<td>Id Artis</td>
				<td><input type="text" name="artist_id"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="SIMPAN"></td>
			</tr>
		</table>
	</form>
</div>
@endsection