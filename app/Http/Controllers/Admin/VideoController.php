<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Video;
use App\Scort;
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
        $lastgal = Video::orderBy('id','desc')->first();
        
        if($lastgal){
            $videos = Video::where('scort_id',$lastgal->scort_id)->orderBy('id','desc')->get();
            
        }else{
            $videos=[]; 
            
        }
        $scorts = Scort::OrderBy('name','desc')->get();
       
        return view('admin.videos.index',['videos'=>$videos,'scorts'=>$scorts]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {  
        $scort_id = $request->scort_id;
        $scorts = Scort::where('id',$scort_id)->OrderBy('name','desc')->get();

        $contador = Video::where('scort_id',$scort_id)->count();
       
        return view('admin.videos.create',['scort_id'=>$scort_id,'scorts'=>$scorts,'contador'=>$contador]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $files = $request->file('video');
            if($request->hasFile('video'))
            {
                foreach ($files as $file) {
                    
                    $video = $file->store('videos');
            
                    Video::create([
                        'scort_id' => $request->scort_id,
                        'path' => $video,
                        
                    ]);
                }
                
            }
        return redirect()->route('videos.index');
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
        
        $video = Video::find($id);
        $paquete = $video->scort->package_id;
        return view('admin.videos.edit',['video'=>$video,'scort_id'=>$video->scort->id,'paquete'=>$paquete]);
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
        $video = Video::find($id);
        $video->status  = $request->status;
        $video->save();

        return response()->json($video);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
