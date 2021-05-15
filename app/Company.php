<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    protected $guarded = [];
    public function jobs()
    {
        // One to many
        return $this->hasMany('App\Jobs');
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }
}
