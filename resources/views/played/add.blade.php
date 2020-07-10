@extends ('layouts.app')

@section ('content')

<div class="container">
	<center><h3>TAMBAH DATA PLAYED</h3></center>
		<form action="{{ url('/played') }}" method="POST">
		@csrf
		<table class="table table-bordered">
			<tr>
				<td>Id Track</td>
				<td><input type="text" name="track_id"></td>
			</tr>
			<tr>
				<td>Play Date</td>
				<td><input type="date" name="play_date"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="SIMPAN"></td>
			</tr>
		</table>
	</form>
</div>
@endsection