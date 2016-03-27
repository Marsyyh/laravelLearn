<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class article extends Model
{


	protected $fillable = [
		'body',
		'title',
		'published_at'
	];    



}
