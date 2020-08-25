<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class prueba extends Controller
{
    function prueba($name = null){

    	if( $name == null){

    		return "estoy en la prueba del controlador prueba y la variable extra esta nula";
    	}else{

    		return "estoy en la prueba del controlador prueba y la variable extra es: " . $name;
    	}
    }
}
