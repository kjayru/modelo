<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    protected $fillable = ['name','description'];
    
    public function scorts(){
        return $this->hasMany('App\Scort');
    }
}
