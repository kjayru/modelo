<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Region;
use App\Scort;
use App\Schedule;
class HomeController extends Controller
{
    public function index(){
        $regions = Region::where('status',2)->get();
        
        return view('front.index',['regions'=>$regions]);
    }

    public function lugar($lugar){

        $regions = Region::where('status',2)->get();

        $region = Region::where('name',$lugar)->first();
           
        $region_id = $region->id;
      
        $scorts = Scort::where('region_id',$region_id)->get();
       
        return view('front.lugar',['lugar'=>$lugar,'scorts'=>$scorts,'regions'=>$regions,'region'=>$region]);
    }

    public function detalle($lugar, $id, $name){
       $regions = Region::where('status',2)->get();
        $scort = Scort::find($id);
        $horarios = Schedule::all();
        $schedulers=[];
            foreach($scort->schedulescorts as $scheduler){
            $schedulers[] =  $scheduler->schedule_id;
            }
            if(count($schedulers)>0){
                $sc = $schedulers;
            }else{
                $sc = 0;
            }

        return view('front.detalle',['scort'=>$scort,'lugar'=>$lugar,'horarios'=>$horarios,'sc'=>$sc,'regions'=>$regions]);
    }
}
