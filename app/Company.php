<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    public function jobs()
    {
        // One to many
        return $this->hasMany('App\Jobs');
    }
}
