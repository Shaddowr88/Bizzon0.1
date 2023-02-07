<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LabelBudget extends Model
{
    public function depenses(){
        return $this->belongsToMany('App\depense');
    }
}
