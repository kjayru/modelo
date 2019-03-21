<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Scort;
use App\Region;
use App\Service;
use App\Schedule;
use App\Characteristic;
use App\Gallery;
use App\Video;
use App\Package;
use App\User;
use App\ScheduleScort;

class ScortController extends Controller
{
    public function __construct()
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
        $scorts =  Scort::OrderBy('id','desc')->get();
        return view('admin.scorts.index',['scorts'=>$scorts]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $regions = Region::all();
        $services = Service::all();
        $caracteristicas = Characteristic::all();
        $paquetes = Package::all();
        $horarios = Schedule::all();
       
        return view('admin.scorts.create',['paquetes'=>$paquetes,'regions'=>$regions,'services'=>$services,'caracteristicas'=>$caracteristicas,'horarios'=>$horarios]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = User::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=>\Hash::make($request->password)
            ]);

        $scort = Scort::create([
            'user_id' => $user->id,
            'package_id'=>$request->package_id,
            'region_id'=> $request->region_id,
            'name' => $request->name,
            'telefono' => $request->telefono,
            'nacionalidad' => $request->nacionalidad,
            'etnia' => $request->etnia,
            'edad' => $request->edad,
            'talla' => $request->talla,
            'peso' => $request->peso,
            'medidas' => $request->medidas,
            'description' => $request->description
            ]);
       
        $scort->services()->sync($request->get('services'));
        $scort->characteristics()->sync($request->get('characteristics'));
        
        $dias = count($request->get('schedule_id'));
        for($i=0; $i<$dias; $i++){
                $posid = $request->schedule_id[$i];
                $horario = new ScheduleScort();
                $horario->scort_id = $scort->id;
                $horario->schedule_id = $posid;
                $horario->save();   
        }

        $dias = count($request->get('inicio'));
       
    

    for($i=0; $i<7; $i++){
            
        if(isset($request->schedule_id[$i])){
            $idem = $request->schedule_id[$i];
            $key = $idem-1;

            $horario = new ScheduleScort();
            $horario->scort_id = $scort->id;             
            $horario->schedule_id = $request->schedule_id[$i];               
            $horario->inicio = $request->inicio[$key];
            $horario->final = $request->final[$key];
            $horario->save();
        }
       
    }
        
        return redirect()->route('scorts.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    
    public function edit($id)
    {
        $scort = Scort::find($id);
        $regions = Region::all();
        $services = Service::all();
        $caracteristicas = Characteristic::all();
        $paquetes = Package::all();

        $servicios=[];
            foreach($scort->services as $service){
            $servicios[] =  $service->id;
            }
            if(count($servicios)>0){
                $sv = $servicios;
            }else{
                $sv = 0;
            }

        $caracters=[];
            foreach($scort->characteristics as $caracter){
            $caracters[] =  $caracter->id;
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

        return view('admin.scorts.edit',[
            'scort'=>$scort,
            'paquetes'=>$paquetes,
            'regions'=>$regions,
            'services'=>$services,
            'caracteristicas'=>$caracteristicas,
            'sv'=>$sv,
            'cr'=>$cr,
            'horarios'=>$horarios,
            'sc'=>$sc 
            ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        
        if(isset($request->password)){
            $user =  User::where('id',$request->user_id)->update(['name'=>$request->name,
                          'email'=>$request->email,
                          'password'=>\Hash::make($request->password)]);
        }else{
            $user =  User::where('id',$request->user_id)->update(['name'=>$request->name,
                          'email'=>$request->email ]);
        }
        
        $scort = Scort::where('id',$id)->update([
            'user_id' => $request->user_id,
            'package_id'=>$request->package_id,
            'region_id'=> $request->region_id,
            'name' => $request->name,
            'telefono' => $request->telefono,
            'nacionalidad' => $request->nacionalidad,
            'etnia' => $request->etnia,
            'edad' => $request->edad,
            'talla' => $request->talla,
            'peso' => $request->peso,
            'medidas' => $request->medidas,
            'description' => $request->description
            ]);
          
        $scort = Scort::find($id);
        $scort->services()->sync($request->get('services'));
        $scort->characteristics()->sync($request->get('characteristics'));
        
        $dias = count($request->get('inicio'));
        
        ScheduleScort::where('scort_id',$id)->delete();

        for($i=0; $i<7; $i++){
            
            if(isset($request->schedule_id[$i])){
                $idem = $request->schedule_id[$i];
                $key = $idem-1;

                $horario = new ScheduleScort();
                $horario->scort_id = $id;             
                $horario->schedule_id = $request->schedule_id[$i];               
                $horario->inicio = $request->inicio[$key];
                $horario->final = $request->final[$key];
                $horario->save();
            }
           
        }
      

        return redirect()->route('scorts.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
        ScheduleScort::where('scort_id',$id)->delete();
        //Characteristic::where('scort_id',$id)->delete();
        //Service::where('scort_id',$id)->delete();

        User::where('id',$id)->delete();

        return redirect()->route('scorts.index');
    }
}
