<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Region extends Model
{
    public function scorts(){
        return $this->hasMany('App\Scort');
    }
}
