<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Permiso; 
use App\Estudiante;
use App\Curso; 
use App\Ensenanza; 
use Illuminate\Database\Eloquent\ModelNotFoundException;


class PermisoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


       public function __construct(){

        $this->middleware('auth');
    }

    public function index()
    {
        
  
  $permisos = Permiso::orderBy('id','DESC')->paginate(10);
        return view('permisos.index',compact('permisos'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
           
    }
    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
 public function create()
    {
     
         return view('permisos.create');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate([
            'nombre_permiso' => 'required',
        ]);
   

        Permiso::create($request->all());
        return redirect()->route('permisos.index')
                        ->with('success','El permiso se creo correctamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
   public function show($id)
    {


        $permiso = Permiso::findOrFail($id);
        return view('permisos.show',compact('permiso'));
      
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
  public function edit($id)
    {
         $permiso = Permiso::findOrFail($id);
        return view('permisos.edit',compact('permiso'));
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
        request()->validate([
            'nombre_permiso' => 'required',
            
        ]);
         $permiso = Permiso::findOrFail($id)->update($request->all());
        return redirect()->route('permisos.index')
                        ->with('success','El permiso se actualizo correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
   public function destroy($id)
    {
          Permiso::findOrFail($id)->delete();
        return redirect()->route('permisos.index')
                        ->with('success','El permiso fue eliminado correctamente');
    }
}

