<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Restaurant extends Model
{
    public function ratings()
    {
        return $this->hasMany(Rating::class);
    }
}
