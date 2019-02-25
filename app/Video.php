<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    protected $fillable =['scort_id','path'];
    
    public function scort(){
        return $this->belongsTo('App\Scort');
    }
}
