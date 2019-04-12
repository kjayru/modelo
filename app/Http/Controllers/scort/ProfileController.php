<?php

namespace App\Http\Controllers\scort;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Contracts\Auth\Guard;
use App\Region;
use App\Scort;
use App\Characteristic;
use App\Service;
use App\ScheduleScort;
use App\Filter;
use App\Schedule;

class ProfileController extends Controller
{
    public function __construct(Guard $auth)
    {
        $this->middleware('auth');
       
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $id = Auth::id();
        $scort = Scort::where('user_id',$id)->first();
        $foto_profile = $scort->cover;
       
        $regions = Region::all();
        $caracteristicas = Characteristic::all();
        $services = Service::all();
        $filters = Filter::all();

        $servicios=[];
            if(!empty($scort->services)){
                foreach($scort->services as $service){
                $servicios[] =  $service->id;
                }
            }

            if(count($servicios)>0){
                $sv = $servicios;
            }else{
                $sv = 0;
            }

        $caracters=[];
        if(!empty($scort->characteristics)){
            foreach($scort->characteristics as $caracter){
            $caracters[] =  $caracter->id;
            }
        }
            if(count($caracters)>0){
                $cr = $caracters;
            }else{
                $cr = 0;
            }
       
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
            
    
            $filtro=[];
            foreach($scort->filters as $fill){
                $filtro[] =  $fill->id;
            }
            if(count($filtro)>0){
                 $fl = $filtro;
            }else{
                $fl = 0;
            }

        return view('scort.perfil.index',['scort'=>$scort,'regions'=>$regions,'services'=>$services,'caracteristicas'=>$caracteristicas,'sv'=>$sv,'cr'=>$cr,'horarios'=>$horarios,'sc'=>$sc,'filters'=>$filters,'fl'=>$fl,'foto_profile'=>$foto_profile]);
    }

    public function update(Request $request, $id)
    {
        if($request->hasFile('fotopanel')){
            $cover = $request->file('fotopanel')->store('profiles');
          
         }else{
             $cover="";
         }
        
        $scort = Scort::where('id',$id)->update([
            
            
            'region_id'=> $request->region_id,
            'name' => $request->name,
            'telefono' => $request->telefono,
            'nacionalidad' => $request->nacionalidad,
            'etnia' => $request->etnia,
            'edad' => $request->edad,
            'talla' => $request->talla,
            'peso' => $request->peso,
            'medidas' => $request->medidas,
            'description' => $request->description,
            'costohora'=>$request->costohora,
            'entrevista' =>$request->entrevista,
            'estacionamiento' =>$request->estacionamiento,
            'experiencia' => $request->experiencia,
            'status' => $request->status,
            'cover'=> $cover 
            ]);
                
        $scort = Scort::find($id);
        $scort->services()->sync($request->get('services'));
        $scort->characteristics()->sync($request->get('characteristics'));  

        

        return redirect()->route('profiles.index');
    }

}
