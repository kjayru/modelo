<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Characteristic extends Model
{
    public function scorts(){
        return $this->belongsToMany('App\Scort');
    }
}
