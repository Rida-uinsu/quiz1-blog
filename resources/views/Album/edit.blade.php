@extends('layouts.app')
@section('content')
<div class="container">
	<h3>Edit Data Album</h3>
	<form action="{{ url('/album/' . $row->id)}}" method="post">
	<input name="_method" type="hidden" value="patch">
	@csrf

	<table>
		<tr>
			<td>PHOTO ID</td>
			<td><input type="text" name="album_pho_id" class="form-control" value="{{ $row->album_pho_id}}"></td>
		</tr>
		<tr>
			<td>NAMA</td>
			<td><input type="text" name="album_name" class="form-control" value="{{ $row->album_name}}"></td>
		</tr>

		<tr>
			<td>KETERANGAN</td>
			<td><input type="text" name="album_text" class="form-control" value="{{ $row->album_text}}"></td>
		</tr>

		<tr>
			<td></td>
			<td><br>
			<button type="submit" class="btn btn-success">UPDATE</button></td>
		</tr>
	</table>
	</form>
</div>
@endsection