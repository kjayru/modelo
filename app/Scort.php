<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Scort extends Model
{
    protected $fillable = [
        'user_id','package_id','region_id','name','telefono','nacionalidad','etnia','edad','talla','peso','medidas','description'
    ];
    public function user(){
        return $this->belongsTo('App\User');
    }

    public function galleries(){
        return $this->hasMany('App\Gallery');
    }
    public function videos(){
        return $this->hasMany('App\Video');
    }

    public function package(){
        return $this->belongsTo('App\Package');
    }

    public function services(){
        return $this->belongsToMany('App\Service');
    }
    public function schedulescorts(){
        return $this->hasMany('App\ScheduleScort');
    }

    public function characteristics(){
        return $this->belongsToMany('App\Characteristic');
    }

    public function region(){
        return $this->belongsTo('App\Region');
    }

    public function convesations(){
        return $this->hasMany('App\Conversation');
    }
}

