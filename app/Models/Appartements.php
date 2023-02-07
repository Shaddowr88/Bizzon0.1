<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appartements extends Model
{
    //
    public function batiments()
    {
        return $this->hasMany("App\batiment")->withTimestamps();
    }

    public function user()
    {
        return $this->belongsToMany("App\user");
    }

//    public function user()
//    {
//        return $this->hasOne("App\user")->withTimestamps();
//    }

//    public function hasBatiment($batiment)
//    {
//        if ($this->batiments()->where('nom', "=", $batiment)->first()) {
//            return true;
//        }
//        return false;
//    }
}
