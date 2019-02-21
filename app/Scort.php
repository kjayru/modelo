<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Scort extends Model
{
    public function user(){
        return $this->belongsTo('App\User');
    }

    public function galleries(){
        return $this->hasMany('App\Gallery');
    }
    public function videos(){
        return $this->hasMany('App\Video');
    }

    public function packages(){
        return $this->belongsTo('App\Package');
    }

    public function services(){
        return $this->belongsToMany('App\Service');
    }
    public function scheduleScorts(){
        return $this->hasMany('App\ScheduleScort');
    }

    public function characteristics(){
        return $this->belongsToMany('App\Characteristic');
    }
}

