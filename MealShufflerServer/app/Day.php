<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Day extends Model
{
	use SoftDeletes;

	protected $table = "day";

	protected $hidden = [
		'week_id',
		'deleted_at',
		'created_at',
		'updated_at',
	];

	public function meal()
	{
		return $this->hasOne('App\Meal');
	}

	public function week()
	{
		return $this->belongsTo('App\Week');
	}
}
