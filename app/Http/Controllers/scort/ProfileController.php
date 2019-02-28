<?php

namespace App\Http\Controllers\scort;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Region;
use App\Scort;
use App\Characteristic;
use App\Service;

class ProfileController extends Controller
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
        $id = Auth::id();
        $scort = Scort::where('user_id',$id)->first();
        $regions = Region::all();
        $caracteristicas = Characteristic::all();
        $services = Service::all();

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
       
        return view('scort.perfil.index',['scort'=>$scort,'regions'=>$regions,'services'=>$services,'caracteristicas'=>$caracteristicas,'sv'=>$sv,'cr'=>$cr]);
    }

    public function update(Request $request, $id)
    {
        
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
            'description' => $request->description
            ]);
                
        $scort = Scort::find($id);
        $scort->services()->sync($request->get('services'));
        $scort->characteristics()->sync($request->get('characteristics'));  
        return redirect()->route('profiles.index');
    }

}
