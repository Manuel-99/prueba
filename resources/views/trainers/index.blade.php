@extends('layouts.app')

@section('title', 'Index')

@section('content')
	
	<div class="row">
		
		@foreach($trainer as $tnr)

				<div class="col-sm">
					
					<div class="card text-center" style="width: 18rem;">
	  					<img src="/images/{{$tnr->avatar}}" class="card-img-top rounded-circle mx-auto d-block" style="width: 100px; height: 100px; background: #EFEFEF; margin-top: 20px;">
	  					<div class="card-body">
	    					<h5 class="card-title">{{$tnr->name}}</h5>
	    					<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
	    					<a href="/trainer/{{$tnr->slug}}" class="btn btn-primary">Ver Más</a>
	  					</div>
					</div>
					
				</div>
		@endforeach()
	</div>
	<!--<label>Estas en index</label>-->
	
@endsection