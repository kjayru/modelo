<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Message;
use App\Conversation;


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
        $mensajes = \DB::table('conversations')->get();
        
        return view('admin.mensajes.index',['mensajes'=>$mensajes]);
    }

    


    public function detail($id){

        $conversation = Conversation::where('id',$id)->first();
        return view('admin.mensajes.detalle',['conversation'=>$conversation]);
    }

    public function sendMessageAdmin(){
        $info = \request('info');
        $data = [];
        parse_str($info,$data);
        $user = User::findOrFail($data['id']);

        try {

            
            \Mail::to($user)->send(new sendMessageAdmin(auth()->user()->name, $data['message']));
            $success = true;
        } catch (\Exception $exception) {
           $success = false;
        }
    }

    
}
