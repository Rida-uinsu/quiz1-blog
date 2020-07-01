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
	<h3>Data Album</h3>
</div>
<div class="col-6">
	<a href="{{ url('album/create') }}" class="btn btn-primary float-right">Tambah Data</a>
</div>
	<table class="table table-hover">
		<tr>
			<td><center><b>ID</b></center></td>
			<td><center><b>ID PHOTO</b></center></td>
			<td><center><b>NAMA ALBUM</b></center></td>
			<td><center><b>KETERANGAN</b></center></td>
			<td><center><b>AKSI</b></center></td>
		</tr>

		@foreach($rows as $row)
		<tr>
			<td><center>{{ $row->id }}</center></td>
			<td><center>{{ $row->album_pho_id }}</center></td>
			<td><center>{{ $row->album_name }}</center></td>
			<td><center>{{ $row->album_text }}</center></td>
			<td>
				<center><a href="{{ url('album/' . $row->id . '/edit')}}" class="btn btn-warning btn-sm">EDIT</a>
				
				<form action="{{ url('album/' . $row->id)}}" method="post" class="d-inline">
					<input name="_method" type="hidden" value="delete">
					@csrf
					<button class="btn btn-danger btn-sm">DELETE</button></form></center>
				</form>
			</td>
		</tr>
		@endforeach
	</table>
</div>

@endsection