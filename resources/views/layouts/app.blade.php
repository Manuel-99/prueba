<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
	<title>PokeUsers - @yield('title')</title>
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-light bg-primary">
  		
  		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
    		
    		<span class="navbar-toggler-icon"></span>
  		</button>
  		<a class="navbar-brand text-white" href="\trainer">PokeUsers</a>

  		<div class="collapse navbar-collapse" id="navbarTogglerDemo03">
    		
    		<ul class="navbar-nav mr-auto mt-2 mt-lg-0">
      			
      			<li class="nav-item active">
        			
        			<a class="nav-link text-white" href="#">Home <span class="sr-only">(current)</span></a>
      			</li>
      			<li class="nav-item">
        			
        			<a class="nav-link" href="#">Link</a>
      			</li>
      			<li class="nav-item">
        			
        			<a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
      			</li>
    		</ul>
    		<form class="form-inline my-2 my-lg-0">
      			
      			<input class="form-control mr-sm-2" type="search" placeholder="Buscar..." aria-label="Buscar">
      			<button class="btn btn-success my-2 my-sm-0" type="submit">Buscar</button>
    		</form>
  		</div>
	</nav>
	<div class="container">
		
		@yield('content')	
	</div>
</body>
</html>