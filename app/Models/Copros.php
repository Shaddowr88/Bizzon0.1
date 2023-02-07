<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Copros extends Model
{
    public function batiment(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany('App\Batiment','copro_id','id');
    }

    public function budget()
    {
        return $this->hasMany('App\budget','copro_id','id');
    }

}
