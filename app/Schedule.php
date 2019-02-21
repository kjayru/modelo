<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    public function schedulescorts(){
        return $this->hasMany('App\ScheduleScort');
    }
}
