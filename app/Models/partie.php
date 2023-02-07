<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class partie extends Model
{
    //
    public function batiments(){
        return $this->belongsToMany('App\Batiment');
    }

}
