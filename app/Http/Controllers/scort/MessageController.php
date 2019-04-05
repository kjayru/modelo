<?php

namespace App\Http\Controllers\scort;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Conversation;
use App\Message;
use App\Scort;
use App\Mail\Mensaje;
use App\Mail\MensajeScort;
use Illuminate\Support\Facades\Mail;
class MessageController extends Controller
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
        return view('scort.mensaje.index');
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $nconversa = Conversation::create(['user_id'=>1,'scort_id'=>$request->scort_id,'time'=>date('h:m:s')]);
         Message::create(['body'=>$request->mensaje,'attach'=>'','asunto'=>$request->asunto,'user_id'=>'1','conversation_id'=>$nconversa->id]);
    
         $scort = Scort::where('id',$request->scort_id)->first();

         try {
             //mensaje administrador
            $mensaje = $request->mensaje;
            $data = [
                'email'=>$scort->user->email,
                'name'=>$scort->name,
                'asunto'=>$request->asunto,
                'mensaje'=>$mensaje
            ];
            Mail::to('escortpe@gmail.com')
            ->send(new Mensaje($data));

            //mensaje Scort
            $mensaje = "Tu mensaje fue enviado, en breve el administrador te respondera";
            $data = [
                'email'=>$scort->user->email,
                'name'=>$scort->name,
                'asunto'=>$request->asunto,
                'mensaje'=>$mensaje
            ];
            Mail::to($scort->user->email)
            ->send(new MensajeScort($data));
           
            $success = true;

        } catch ( Swift_TransportException $e) {
            echo $e->getMessage();
        $success = false;
        }


         return  redirect()->route('mensajes.index')
                    ->with('info','tu mensaje se envio con exito, el administrador se contactara en breve');    
        }

    
}
