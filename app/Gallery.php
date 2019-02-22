<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    protected $fillable = ['scort_id','photo','thumb'];
    
    public function scort(){
        return $this->belongsTo('App\Scort');
    }
}
