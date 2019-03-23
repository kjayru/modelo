<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Filter extends Model
{
    public function scorts(){
        return $this->belongsToMany('App\Scort');
    }
}
