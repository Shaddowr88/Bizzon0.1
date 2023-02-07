<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class label_budget extends Model
{
    public function depenses(){
        return $this->belongsToMany('App\depense');
    }
}
