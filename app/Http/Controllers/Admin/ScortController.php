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
use App\Filter;
use App\Mail\Register;
use Illuminate\Support\Facades\Mail;

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
        $filters = Filter::all();
        return view('admin.scorts.create',['paquetes'=>$paquetes,'regions'=>$regions,'services'=>$services,'caracteristicas'=>$caracteristicas,'horarios'=>$horarios,'filters'=>$filters]);
    
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
            'description' => $request->description,
            'costohora'=>$request->costohora,
            'entrevista' =>$request->entrevista,
            'estacionamiento' =>$request->estacionamiento,
            'experiencia' => $request->experiencia,
            'status' => $request->status

            ]);
       
        
        $scort->services()->sync($request->get('services'));
        $scort->characteristics()->sync($request->get('characteristics'));

        $scort->filters()->sync($request->get('filters'));
        
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

        $roleuser = new RoleUser();
        $roleuser->role_id = '2';
        $roleuser->user_id = $user->id;
        $roleuser->save();
        
        try {
            $mensaje = "bienvenido a modelos Perú, ";
            $data = ['email'=>$request->email,'name'=>$request->name,'password'=>$request->password,'mensaje'=>$mensaje];
            Mail::to($request->email)
            ->send(new Register($data));
           
            $success = true;
        } catch ( Swift_TransportException $e) {
            echo $e->getMessage();
        $success = false;
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
        $filters = Filter::all();

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
        

        $filtro=[];
        foreach($scort->filters as $fill){
            $filtro[] =  $fill->id;
        }
        if(count($filtro)>0){
             $fl = $filtro;
        }else{
            $fl = 0;
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
            'sc'=>$sc,
            'filters'=>$filters,
            'fl'=>$fl
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
            'description' => $request->description,
            'costohora'=>$request->costohora,
            'entrevista' =>$request->entrevista,
            'estacionamiento' =>$request->estacionamiento,
            'experiencia' => $request->experiencia,
            'status' => $request->status
            ]);
          
        $scort = Scort::find($id);
        $scort->services()->sync($request->get('services'));
        $scort->characteristics()->sync($request->get('characteristics'));
        $scort->filters()->sync($request->get('filters'));
        
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

        Scort::where('id',$id)->delete();

        return redirect()->route('scorts.index');
    }

    
}
