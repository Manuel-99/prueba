@extends('layouts.app')

@section('title', 'Editar')

@section('content')
	<form class="form-group" method="POST" action="/trainer/{{$trainer->slug}}" enctype="multipart/form-data" style="margin: 30px;">
		@method('PUT')
		@csrf
		<div class="form-group">
			
			<label>Nombre</label>
			<input type="text" class="form-group" name="txtNombre" value="{{$trainer->name}}">
		</div>

		<div class="form-group">
			
			<label>Avatar</label>
			<input type="file" class="form-group" name="txtAvatar">
		</div>

		<button type="submit" class="btn btn-primary">GUARDAR</button>	
	</form>
@endsection