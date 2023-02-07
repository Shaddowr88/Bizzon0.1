<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Intervenant extends Model
{
    //

    public function metier()
    {
        return $this->belongsToMany("App\Metier")->withTimestamps();
    }

    public function hasMetier($metier)
    {
        if ($this->metier()->where('name', "=", $metier)->first()) {
            return true;
        }
        return false;
    }
}
