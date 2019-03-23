<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Region;
use App\Scort;
use App\Schedule;
use App\Package;

class HomeController extends Controller
{
    public function index(){
        $regions = Region::where('status',2)->get();
        $packages = Package::all();

        return view('front.index',['regions'=>$regions,'packages'=>$packages]);
    }

    public function lugar($lugar){
       
        $regions = Region::where('status',2)->get();
        $region = Region::where('name',$lugar)->first();   
        $region_id = $region->id;
        $scorts = Scort::where('region_id',$region_id)->get();
        $packages = Package::all();
       
        return view('front.lugar',['lugar'=>$lugar,'scorts'=>$scorts,'regions'=>$regions,'region'=>$region,'packages'=>$packages]);
    }

    public function detalle($lugar, $id, $name){
        $regions = Region::where('status',2)->get();
        $region = Region::where('name',$lugar)->first();   
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
        $packages = Package::all();
        return view('front.detalle',['scort'=>$scort,'lugar'=>$lugar,'horarios'=>$horarios,'region'=>$region,'sc'=>$sc,'regions'=>$regions,'packages'=>$packages]);
    }


    public function filtropack($lugar,$packete){
        $regions = Region::where('status',2)->get();
        $region = Region::where('name',$lugar)->first();  
        $packages = Package::all();

        return view('front.categoria',['region'=>$region,'regions'=>$regions,'packages'=>$packages,'lugar'=>$lugar]);
    }

    public function contacto($lugar){
        $regions = Region::where('status',2)->get();
        $region = Region::where('name',$lugar)->first(); 
        $packages = Package::all();
        
        return view('front.contacto',['regions'=>$regions,'packages'=>$packages,'region'=>$region,'lugar'=>$lugar]);
    }

    public function anunciate($lugar){
        $regions = Region::where('status',2)->get();
        $region = Region::where('name',$lugar)->first(); 
        $packages = Package::all();
        
        return view('front.anunciate',['regions'=>$regions,'packages'=>$packages,'region'=>$region,'lugar'=>$lugar]);
    }


    //peticiones asincronas

    public function getFiltro(){
        
    }

    public function getBuscar(Request $request){

    }
}
