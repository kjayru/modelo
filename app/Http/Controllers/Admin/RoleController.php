<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Caffeinated\Shinobi\Models\Role;
use Caffeinated\Shinobi\Models\Permission;

class RoleController extends Controller
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
        $roles = Role::all();
        return view('admin.role.index',['roles'=>$roles]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $roles = Role::get();
        $permissions = Permission::get();
        return view('admin.role.create',['roles'=>$roles,'permissions'=>$permissions]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $role = new Role();
        $role->name = $request->name;
        $role->slug = $request->slug;
        $role->description = $request->description;
        

        $role->save();

        $role->permissions()->sync($request->get('permissions'));

        return redirect()->route('roles.index')
        ->with('info','Rol creado satisfactoriamente');
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
       
        $role = Role::find($id);
        $permissions = Permission::get();
        $marcas=[];
        foreach($role->permissions as $marca){
           $marcas[] =  $marca->id;
        }

        if(count($marcas)>0){
            $mcas = $marcas;
        }else{
            $mcas = 0;
        }

        return view('admin.role.edit',['role'=>$role,'permissions'=>$permissions,'marcas'=>$mcas]);
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
       

        $role = Role::find($id);
        $role->name = $request->name;
        $role->slug = $request->slug;
        $role->description = $request->description;
        

        $role->save();

        $role->permissions()->sync($request->get('permissions'));

        return redirect()->route('roles.index')
        ->with('info','Rol actualizado satisfactoriamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        Role::find($request->id)->delete();

        return response()->json(['rpta'=>'ok']);
    }
}
