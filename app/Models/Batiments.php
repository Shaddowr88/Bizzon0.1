<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Batiments extends Model
{
    //Les parties commune qui appartiennent au batiments.
    public function parties(){
        return $this->belongsToMany('App\partie');
    }

    public function appartement(){
        return $this->belongsTo('App\appartement')->withTimestamps();
    }

    public function copros()
    {
        return $this->belongsTo("App\copros")->withDefault();
    }

}
