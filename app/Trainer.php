<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Trainer extends Model
{
	protected $fillable = ['name','avatar'];

	/**
	 *Get the route key for the model,
	 *
	 *@return string
	*/
    function getRouteKeyName(){
    	return 'slug';
    }
}
