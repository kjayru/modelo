<?php

namespace App\Http\Controllers\scort;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\ImageManagerStatic as Image;
use App\Gallery;
use App\User;
use App\Scort;
use App\Package;
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
        $id = Auth::id();  
        $user = User::find($id);
        $galerias = Gallery::Where('scort_id',$user->scort->id)->OrderBy('id','desc')->get();

        $paquete = $user->scort->package->id;

        if($user->scort->package->id == 1 ){
            $limite = 100;
        }
        if( $user->scort->package->id == 2 ){
            $limite = 5;
        }
        
        $conteo = Gallery::Where('scort_id',$user->scort->id)->count();

        return view('scort.galeria.index',['galerias'=>$galerias,'paquete'=>$paquete,'limite'=>$limite,'conteo'=>$conteo]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $id = Auth::id();  
        $user = User::find($id);
        $scort_id = $user->scort->id;
        return view('scort.galeria.create',['scort_id'=>$scort_id]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
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
     return  redirect()->route('migaleria.index'); 
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
        //
    }
}
