<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
	use SoftDeletes;

	protected $fillable = [
		'title','body','votes',
	];

	protected $dates = ['deleted_at'];
}
