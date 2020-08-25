@extends('layouts.app')

@section('title', 'Crear')

@section('content')
	
	<form class="form-group" method="POST" action="/trainer" enctype="multipart/form-data">
		
		@csrf
		<div class="form-group">
			
			<label>Nombre</label>
			<input type="text" class="form-group" name="txtNombre">
		</div>

		<div class="form-group">
			
			<label>Avatar</label>
			<input type="file" class="form-group" name="txtAvatar">
		</div>

		<button type="submit" class="btn btn-primary">GUARDAR</button>	
	</form>
	
@endsection