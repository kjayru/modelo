<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    protected $fillable =['scort_id','path','status'];
    
    public function scort(){
        return $this->belongsTo('App\Scort');
    }
}
