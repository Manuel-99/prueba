@extends('layouts.app')

@section('title','Mostrar')

@section('content')
	
	<img src="/images/{{$trainer->avatar}}" class="card-img-top rounded-circle mx-auto d-block" style="width: 200px; height: 200px; background: #EFEFEF; margin-top: 20px;">
	<div class="text-center">
	
		<h5 class="card-title">{{$trainer->name}}</h5>
		<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.Some quick example text to build on the card title and make up the bulk of the card's content.Some quick example text to build on the card title and make up the bulk of the card's content.</p>
		<a href="/trainer/{{$trainer->slug}}/edit" class="btn btn-primary">Editar</a>
	</div>
@endsection()