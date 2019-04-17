<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Region;
use App\Service;
use App\Characteristic;

class ConfigurationController extends Controller
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
        $regiones = Region::OrderBy('name','asc')->get();
        $servicios = Service::OrderBy('name','asc')->get();
        $characters = Characteristic::OrderBy('name','asc')->get();
        return view('admin.configuracion.index',['regiones'=>$regiones,'servicios'=>$servicios,'characters'=>$characters]);
    }

   

    public function updateRegion(Request $request, $id){
        $region = Region::find($id);
        $region->status  = $request->status;
        $region->save();

        return response()->json($region);
    }

    public function updateCaracter(Request $request, $id){
        $caracter = Characteristic::find($id);
        $caracter->status  = $request->status;
        $caracter->save();

        return response()->json($caracter);
    }

    public function updateServicio(Request $request, $id){
        $servicio = Service::find($id);
        $servicio->status  = $request->status;
        $servicio->save();

        return response()->json($servicio);
    }

    //edit service

    //edit caracteristica

    //delete service

    //delete caracteristica
}
