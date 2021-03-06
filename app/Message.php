<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    protected $fillable = [
        'body','attach','asunto','user_id','conversation_id'
    ];
    public function user(){
        return $this->belongsTo('App\User');
    }

    public function conversation(){
        return $this->belongsTo('App\Conversation');
    }

    public static function numMessages($id){
        $mensajes = \DB::table('conversations')->where('scort_id',$id)->count();

        return $mensajes;
    }

    public static function getName($id){
        $datos = \DB::table('scorts')->select('name')->where('id',$id)->first();
      
        return $datos->name;
    }
}
