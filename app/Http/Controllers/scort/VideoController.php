<?php

namespace App\Http\Controllers\scort;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use App\Video;
use App\User;
use App\Scort;
use App\Package;

class VideoController extends Controller
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
        $foto_profile = $scort->cover;

        $user = User::find($id);
        $videos = Video::Where('scort_id',$user->scort->id)->OrderBy('id','desc')->get();

        $paquete = $user->scort->package->id;

        if($user->scort->package->id == 1 ){
            $limite = 5;
        }
        if( $user->scort->package->id == 2 ){
            $limite = 0;
        }
        
        $conteo = Video::Where('scort_id',$user->scort->id)->count();

        return view('scort.videos.index',['videos'=>$videos,'paquete'=>$paquete,'limite'=>$limite,'conteo'=>$conteo,'foto_profile'=>$foto_profile]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $id = Auth::id();  
        $scort = Scort::where('user_id',$id)->first();
        $scort_id = $scort->id;

        $contador = Video::where('scort_id',$scort_id)->count();

        return view('scort.videos.create',['scort_id'=>$scort_id,'scorts'=>$scort,'contador'=>$contador]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        

        $scort = Scort::find($request->scort_id);

        //contamos numero de videos 
        $num_videos = Video::where('scort_id',$request->scort_id)->count();
       
        $carga = false;

        switch ($scort->package->id) {
            case 1:
            //1 video
            if($num_videos<2){
                $carga = true;
             }
            break;
            case 2:
            //ningun video
                $carga = false;
            
            break;
            
        }
        
        if($carga){
        $file = $request->file('video');
       
            if(!empty($file))
            {
                
                //foreach ($files as $file) {
                    
                    $video = $file->store('videos');
            
                   $result= Video::create([
                        'scort_id' => $request->scort_id,
                        'path' => $video,
                        
                    ]);
                //}
               
            }
        }else{
            return redirect()->route('mivideo.index')
                    ->with('info','No tiene permitido cargar mas videos'); 
        }
        return redirect()->route('mivideo.index')
                        ->with('info','El video se ha cargado con exito'); 


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
        Video::find($id)->delete();
        return redirect()->route('mivideo.index')
                        ->with('info','El video se ha elminado exito'); 
    }
}
