<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


//ruta sencilla que retorna un mensaje
Route::get('/miruta', function(){

	return "Esta es mi ruta";
});


//con variables name  lastname deben de estar entre corchetes y en el function
Route::get('/name/{name}/lastname/{lastname?}', function($name, $lastname = null){

	return "Hola soy " . $name . " " . $lastname;
});

//damos por nombre o metodo a llamar en la pagina como prueba para acceder a ella, y la funcion a ejecutar sera del controlador prueba  la funcion prueba esta despues del @.

Route::get("/prueba/{name?}","prueba@prueba");

Route::resource("/trainer","TrainerController");