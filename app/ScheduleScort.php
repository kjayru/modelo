<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ScheduleScort extends Model
{
    protected $table ='schedule_scort';

    public function scort(){
        return $this->belongsTo('App\Scort');
    }
    public function schedule(){
        return $this->belongsTo('App\Schedule');
    }

    public static function valores($id){
        $horas = \App\ScheduleScort::where('schedule_id',$id)->first();
        $valor = ["inicio"=>$horas->inicio, "final"=>$horas->final];
        return $valor;
    }
}
