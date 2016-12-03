<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Year extends Model
{
	use SoftDeletes;

	protected $table = "year";

	protected $hidden = [
		'deleted_at',
		'created_at',
		'updated_at',
	];

	public function months()
	{
		return $this->hasMany('App\Month');
	}

}
