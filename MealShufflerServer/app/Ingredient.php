<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Ingredient extends Model
{
	use SoftDeletes;

	protected $table = "ingredient";

	protected $hidden = [
		'meal_id',
		'deleted_at',
		'created_at',
		'updated_at',
	];

	public function meal(){
		return $this->belongsTo('App\Meal');
	}

}
