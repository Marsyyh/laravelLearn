<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class todo extends Model
{
    protected $fillable = [
    	'user_id',
    	'description',
    	'date',
    	'status',
    ];

    public function user(){
    	return $this->belongsTo('\App\user');
    }
}
