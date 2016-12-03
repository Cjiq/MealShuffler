<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Month extends Model
{
	use SoftDeletes;

	protected $table = "month";

	protected $hidden = [
		'year_id',
		'deleted_at',
		'created_at',
		'updated_at',
	];

	public function weeks()
	{
		return $this->hasMany('App\Week');
	}

	public function year()
	{
		return $this->belongsTo('App\Month');
	}
}
