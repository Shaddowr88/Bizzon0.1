<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Depense extends Model
{
    public function LabelBudgets(){
        return $this->belongsToMany('App\Label_budget');
    }
}
