<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    public function scort(){
        return $this->belongsTo('App\Scort');
    }
}
