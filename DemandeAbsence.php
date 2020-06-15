<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DemandeAbsence extends Model
{
    public function absences()
    {
        return $this->hasMany('App\Absense');
    }
}
