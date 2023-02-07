<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Budget extends Model
{
    public function copros()
    {
        return $this->belongsTo("App\copros")->withDefault();
    }

}
