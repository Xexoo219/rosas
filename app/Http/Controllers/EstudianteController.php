<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Estudiante;
use App\Curso;
use App\Ensenanza;
use App\Permiso;
use DB;

class EstudianteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct(){

        $this->middleware('auth');
    }


    public function index(Request $request)
    {


       // dd($request->get('codigo_barra'));
      // $products = Product::all();
        //return view('product')->with('products',$products);

         //   $products = Product::select('products.id','products.name as product','price','marks.name as mark')->join('marks','marks.id','=','products.marks_id')->get();
           //  return view('products.index',compact('products'))

        $curso = Curso::all();
        $ensenanza = Ensenanza::all();
        $permiso = Permiso::all();
        $cursos = DB::table('estudiantes')
                    ->join('cursos', 'cursos.id', '=', 'estudiantes.cursos_id')
                    ->select('cursos.nombre_curso')
                    ->get();
                    
        $estudiantes = Estudiante::name($request->get('name'))->orderBy('id','DESC')->paginate(100);
        return view('estudiantes.index',compact('estudiantes','curso','ensenanza', 'permiso'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $curso = Curso::all();
        $ensenanza = Ensenanza::all();
        $permiso = Permiso::all();
         return view('estudiantes.create',compact('curso','ensenanza','permiso'));
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
            'nombres' => 'required',
            'apellidos' => 'required',
            'codigo_barra' => 'required',
            'cursos_id' => 'required',
            'ensenanzas_id' => 'required',
            'permisos_entrada_id' => 'required',
            'permisos_salida_id' => 'required',
            'permisos_almuerzo_id' => 'required',
            'permisos_utp_id' => 'required',
            

        ]);
   

      Estudiante::create($request->all());  
        return redirect()->route('estudiantes.index')
                        ->with('success','El estudiante fue creado correctamente');
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $curso = Curso::all();
        $ensenanza = Ensenanza::all();
        $permiso = Permiso::all();
        $estudiante = Estudiante::findOrFail($id);
        return view('estudiantes.show',compact('estudiante','curso','ensenanza','permiso'));
      
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $estudiantes = Estudiante::findOrFail($id);
        $cursos = Curso::all();
        $ensenanzas = Ensenanza::all();
        $permisos_entrada = Permiso::all();
        return view('estudiantes.edit',compact('estudiantes','cursos','ensenanzas','permisos_entrada'));
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
            'nombres' => 'required',
            'apellidos' => 'required',
            'codigo_barra' => 'required',
            'cursos_id' => 'required',
            'ensenanzas_id' => 'required',
            'permisos_entrada_id' => 'required',
            'permisos_salida_id' => 'required',
            'permisos_almuerzo_id' => 'required',
            'permisos_utp_id' => 'required',
            
        ]);
        Estudiante::findOrFail($id)->update($request->all());
        return redirect()->route('estudiantes.index')
                        ->with('success','Estudiante actualizado correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
           Estudiante::findOrFail($id)->delete();
        return redirect()->route('estudiantes.index')
                        ->with('success','Estudiante fue eliminado correctamente');
    }


}

