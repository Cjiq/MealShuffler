<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Week extends Model
{
	use SoftDeletes;

	protected $table = "week";

	protected $hidden = [
		'month_id',
		'deleted_at',
		'created_at',
		'updated_at',
	];

	public function days()
	{
		return $this->hasMany('App\Day');
	}

	public function month()
	{
		return $this->belongsTo('App\Month');
	}
}
