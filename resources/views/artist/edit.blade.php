@extends ('layouts.app')

@section ('content')

<div class="container">
	<center><h3>EDIT DATA ARTIS</h3></center>
	<form action="{{ url('/artist/' . $row->artist_id) }}" method="POST">
		<input name="_method" type="hidden" value="PATCH">
		@csrf
		<table class="table table-bordered">
			<tr>
				<td>Nama</td>
				<td><input type="text" name="artist_name" value="{{ $row->artist_name }}"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="UPDATE"></td>
			</tr>
		</table>
	</form>
</div>
@endsection