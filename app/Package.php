<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    public function scorts(){
        return $this->hasMany('App\Scort');
    }
}
