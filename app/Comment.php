<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = ['body', 'user_id', 'scort_id'];
 
  public function scort()
  {
    return $this->belongsTo('App\Scort');
  }
 
  public function client()
  {
    return $this->belongsTo('App\Client');
  }
}
