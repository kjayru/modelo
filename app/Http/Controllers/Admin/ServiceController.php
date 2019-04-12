<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Service;

class ServiceController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    

    public function show($id){

        $service = Service::find($id);

        return response()->json($service);
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $service = new Service();
        $service->name = $request->name;
        $service->save();

        return redirect()->route('configurations.index');
    }

    public function update(Request $request,$id){

        $servicio = Service::find($id);
        $servicio->name = $request->name;
        $servicio->save();
        return back()->with('info','Servicio actualizado');
    }


    public function destroy($id)
    {
        Service::find($id)->delete();
        return back()->with('info','Servicio Eliminado');
    }
    
}
