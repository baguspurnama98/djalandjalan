<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Place extends Model
{
    protected $table = "trip";
    protected $guarded = ['id'];

    public function trip()
    {
        return $this->hasMany('App\Trip');
    }
}
