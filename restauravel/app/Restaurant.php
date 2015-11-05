<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Restaurant extends Model
{
	protected $hidden = ['created_at', 'updated_at'];

    public function ratings() {
    	return $this->hasMany('App\Rating'); // App\Rating::class
    }
}
