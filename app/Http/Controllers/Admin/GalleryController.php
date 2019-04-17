<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Gallery;
use App\Scort;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\ImageManagerStatic as Image;

class GalleryController extends Controller
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
        $lastgal = Gallery::orderBy('id','desc')->first();
        if($lastgal){
        $galerias = Gallery::where('scort_id',$lastgal->scort_id)->orderBy('id','desc')->get();
        }else{
            $galerias=[];  
        }

        $scorts = Scort::OrderBy('name','desc')->get();
        return view('admin.galerias.index',['galleries'=>$galerias,'scorts'=>$scorts]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $scort_id = $request->scort_id;
        return view('admin.galerias.create',['scort_id'=>$scort_id]);
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

        //contamos numero de imagenes 
        $num_photos = Gallery::where('scort_id',$request->scort_id)->count();
        
        $carga = false;

        switch ($scort->package->id) {
            case 1:
            //carga ilimitada
               $carga = true;
            break;
            case 2:
            //solo 5 imagenes
            if($num_photos<5){
                $carga = true;
            }
            break;
            
        }

        if($carga){
           $files = $request->file('photos');
            if($request->hasFile('photos'))
            {
                foreach ($files as $file) {
                    
                    $foto = $file->store('galeria');
                    $name = $file->hashName();
                    $newname = 'thumb-'.$name;
                    
                    $image = \Image::make($file);

                    $image->resize(300, null, function ($constraint) {
                        $constraint->aspectRatio();
                    });

                    Storage::put('galeria/thumb/'.$newname, (string) $image->encode());

                    Gallery::create([
                        'scort_id' => $request->scort_id,
                        'photo' => $foto,
                        'thumb' => $newname
                    ]);
                }
                
            }
        }else{
            return  redirect()->route('galleries.index')
                    ->with('info','Ha superado la carga permitido por su paquete');    
        }
         return  redirect()->route('galleries.index')
                 ->with('info','Imagen(es) cargada(s) con exito');
                   
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
        
        $galeria = Gallery::find($id);
        
        $galeria->status = $request->status;
        $galeria->save();

        return response()->json($galeria);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Gallery::find($id)->delete();
        return redirect()->route('galleries.index');
    }

    public function getalldata($id){

        $fotos = Gallery::where('scort_id',$id)->get();

        return response()->json($fotos);
    }

    
}
