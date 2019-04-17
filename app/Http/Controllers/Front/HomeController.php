<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Region;
use App\Scort;
use App\Schedule;
use App\Package;
use Illuminate\Support\Facades\Mail;
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
        $region_id = $region->id;
        $scorts = Scort::where('region_id',$region_id)->get();

      
        if($packete=="Premium"){
            foreach($scorts as $scort){
                if($scort->package_id==1){
                    $result[] = $scort;
                }
            }
           
        }
        else if($packete=="Free"){
            foreach($scorts as $scort){
                if($scort->package_id==2){
                    $result[] = $scort;
                }
            }
        }else{
            $result="";
        }


        return view('front.categoria',['region'=>$region,'regions'=>$regions,'packages'=>$packages,'lugar'=>$lugar,'scorts'=>$result]);
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

    public function getFiltro(Request $request){
        
        $ciudad = Region::where('name',$request->lugar)->first();
  
        $filtro = $request->filtro;

        
            $result = Scort::where('region_id',$ciudad->id)
            ->whereHas('filters',function($query) use ($filtro)
            {
                $query->where('name', $filtro); 
            })->with('galleries')->get();
     

        return response()->json($result);
    }

    public function search(Request $request){
        
        $regions = Region::where('status',2)->get();
        $region = Region::where('name',$request->lugar)->first();   
        $region_id = $region->id;
        $lugar = $request->lugar;
        $mensaje = "";
        $packages = Package::all();
        //por nombre
        $scorts = Scort::where('region_id',$region_id)->where('name','like','%'.$request->buscar.'%')->get();
       
        if(count($scorts)==0){
           //por edad
          
           $scorts = Scort::where('region_id',$region_id)->where('edad',$request->buscar)->get();
          
           if(count($scorts)==0){
                //por cabello
                $scorts = Scort::where('region_id',$region_id)->where('etnia','like','%'.$request->buscar.'%')->get();
                
                if(count($scorts)==0){
                    //por lugar
                    
                    $ciudad = Region::where('name','like','%'.$request->buscar.'%')->first();  
                    if(!empty($ciudad)){ 
                        $ciudad_id = $ciudad->id;
                        $scorts = Scort::where('region_id',$ciudad_id)->where('status',2)->get();

                            if(count($scorts)==0){
                                $mensaje="No se tiene resultado se su busqueda.";
                            }else{
                                $lugar = $ciudad->name;
                            }

                    }else{


                        $mensaje="Lo sentimos, no se tiene resultado se su busqueda.";
                    }
                }
           }
        }
       
        return view('front.busqueda',['mensaje'=>$mensaje,'lugar'=>$lugar,'scorts'=>$scorts,'regions'=>$regions,'region'=>$region,'packages'=>$packages]);

    }
    

    public function sendcontacto(Request $request){
       
        try {
            //mensaje administrador
           $mensaje = $request->mensaje;
           $data = [
               'name'   => $request->name,
               'email'  => $request->email,
               'phone'  => $request->phone,
               'subject' => $request->subject,
               'message' => $request->message
           ];
           Mail::to('escortpe@gmail.com')
           ->send(new Mensaje($data));

           $success = true;

       } catch ( Swift_TransportException $e) {
           echo $e->getMessage();
       $success = false;
       }

       return back()->with('info','Mensaje Enviado satisfactoriamente');
    }
}
