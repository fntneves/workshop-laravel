<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rating extends Model
{
	protected $fillable = ['username', 'comment', 'value'];

    public function restaurant() {
    	return $this->belongsTo('App\Restaurant');
    }
}
