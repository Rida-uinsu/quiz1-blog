@extends('layouts.app')
@section('content')
<DOCTYPE html> 
<html>
<head>
<title></title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>
<body>
<div class="container">
<div class="row">
<div class="col-6">
	<h3>Data Post</h3>
</div>
<div class="col-6">
	<a href="{{ url('post/create') }}" class="btn btn-primary float-right">Tambah Data</a>
</div>
	<table class="table table-hover">
		<tr>
			<td><center><b>ID</b></center></td>
			<td><center><b>KATEGORI</b></center></td>
			<td><center><b>TANGGAL</b></center></td>
			<td><center><b>SLUG</b></center></td>
			<td><center><b>JUDUL</b></center></td>
			<td><center><b>KETERANGAN</b></center></td>
			<td><center><b>AKSI</b></center></td>
		</tr>

		@foreach($rows as $row)
		<tr>
			<td><center>{{ $row->id }}</td>
			<td><center>{{ $row->post_cat_id }}</td></center>
			<td><center>{{ $row->post_date }}</td></center>
			<td><center>{{ $row->post_slug }}</td></center>
			<td><center>{{ $row->post_tittle }}</td></center>
			<td><center>{{ $row->post_text }}</td></center>
			<td>
				<center><a href="{{ url('post/' . $row->id . '/edit')}}" class="btn btn-warning btn-sm">EDIT</a>
				
				<form action="{{ url('post/' . $row->id)}}" method="post" class="d-inline">
					<input name="_method" type="hidden" value="delete">
					@csrf
					<button class="btn btn-danger btn-sm">DELETE</button></form></center>
				</form>
			</td>
		</tr>
		@endforeach
	</table>

@endsection