<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jobs extends Model
{
    public function getRouteKeyName()
    {
        return 'slug'; 
    }

    public function company()
    {
        // One To Many (inverse)
        return $this->belongsTo('App\Company');
    }
}
