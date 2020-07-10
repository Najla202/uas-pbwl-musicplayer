@extends ('layouts.app')

@section ('content')

<div class="container">
	<center><h3>EDIT DATA TRACK</h3></center>
	<form action="{{ url('/track/' . $row->track_id) }}" method="POST">
		<input name="_method" type="hidden" value="PATCH">
		@csrf
		<table class="table table-bordered">
			<tr>
				<td>NAMA</td>
				<td><input type="text" name="track_name" value="{{ $row->track_name }}"></td>
			</tr>
			<tr>
				<td>ID ALBUM</td>
				<td><input type="text" name="album_id" value="{{ $row->album_id }}"></td>
			</tr>
			<tr>
				<td>TIME</td>
				<td><input type="text" name="track_time" value="{{ $row->track_time }}"></td>
			</tr>
			<tr>
				<td>FILE</td>
				<td><input type="file" name="track_file" value="{{ $row->track_file"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="UPDATE"></td>
			</tr>
		</table>
	</form>
</div>
@endsection