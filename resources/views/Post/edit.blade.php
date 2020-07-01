@extends('layouts.app')
@section('content')

<div class="container">
	<h3>Edit Data Post</h3>
	<form action="{{ url('/post/' . $row->id)}}" method="post">
	<input name="_method" type="hidden" value="patch">
	@csrf

	<table>
		<tr>
			<td>KATEGORI ID</td>
			<td><input type="text" name="post_cat_id" class="form-control" value="{{ $row->post_cat_id}}"></td>
		</tr>

		<tr>
			<td>TANGGAL</td>
			<td><input type="date" name="post_date" class="form-control" value="{{ $row->post_date}}"></td>
		</tr>

		<tr>
			<td>SLUG</td>
			<td><input type="text" name="post_slug" class="form-control" value="{{ $row->post_slug}}"></td>
		</tr>

		<tr>
			<td>JUDUL</td>
			<td><input type="text" name="post_tittle" class="form-control" value="{{ $row->post_tittle}}"></td>
		</tr>

		<tr>
			<td>KETERANGAN</td>
			<td><input type="text" name="post_text" class="form-control" value="{{ $row->post_text}}"></td>
		</tr>

		<tr>
			<td></td>
		<td>
		<br><button type="submit" class="btn btn-success">UPDATE</button></td>


		</tr>
	</table>
	</form>
</div>
@endsection