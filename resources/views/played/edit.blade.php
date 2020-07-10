@extends ('layouts.app')

@section ('content')

<div class="container">
	<center><h3>EDIT DATA PLAYED</h3></center>
	<form action="{{ url('/played/' . $row->play_id) }}" method="POST">
		<input name="_method" type="hidden" value="PATCH">
		@csrf
		<table class="table table-bordered">
			<tr>
				<td>ID TRACK</td>
				<td><input type="text" name="track_id" value="{{ $row->track_id }}"></td>
			</tr>
			<tr>
				<td>PLAY DATE</td>
				<td><input type="date" name="play_date" value="{{ $row->play_date"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="UPDATE"></td>
			</tr>
		</table>
	</form>
</div>
@endsection