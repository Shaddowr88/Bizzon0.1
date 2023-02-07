<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Etages extends Model
{
    //
    //Récuperer les produits d'une catégorie
    public function batiments()
    {
        return $this->hasMany('App\Batiment');
    }


}
