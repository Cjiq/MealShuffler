<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Meal extends Model
{
	use SoftDeletes;

	protected $table = "meal";

	protected $hidden = [
		'meal_id',
		'deleted_at',
		'created_at',
		'updated_at',
	];

	public function ingredients()
	{
		return $this->hasMany('App\Ingredient');
	}
}
