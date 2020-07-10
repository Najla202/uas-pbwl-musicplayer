@extends ('layouts.app')

@section ('content')

<div class="container">
	<center><h3>EDIT DATA ALBUM</h3></center>
	<form action="{{ url('/album/' . $row->album_id) }}" method="POST">
		<input name="_method" type="hidden" value="PATCH">
		@csrf
		<table class="table table-bordered">
			<tr>
				<td>NAMA</td>
				<td><input type="text" name="album_name" value="{{ $row->album_name }}"></td>
			</tr>
			<tr>
				<td>ID ARTIS</td>
				<td><input type="text" name="artist_id" value="{{ $row->artist_id }}"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="UPDATE"></td>
			</tr>
		</table>
	</form>
</div>
@endsection