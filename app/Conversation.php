<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Conversation extends Model
{
    public function user(){
        return $this->belongsTo('App\User');
    }

    public function scort(){
        return $this->belongsTo('App\Scort');
    }

    public function messages(){
        return $this->hasMany('App\Message');
    }
}
