<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Estudiante;
use App\Curso; 
use Illuminate\Database\Eloquent\ModelNotFoundException;


class CursoController extends Controller
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
        
  
  $cursos = Curso::orderBy('id','DESC')->paginate(10);
        return view('cursos.index',compact('cursos'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
           
    }
    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
 public function create()
    {
     
         return view('cursos.create');
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
            'nombre_curso' => 'required|max:4',
        ]);
   

        Curso::create($request->all());
        return redirect()->route('cursos.index')
                        ->with('success','El curso se creo correctamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
   public function show($id)
    {


        $curso = Curso::findOrFail($id);
        return view('cursos.show',compact('curso'));
      
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
  public function edit($id)
    {
         $curso = Curso::findOrFail($id);
        return view('cursos.edit',compact('curso'));
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
            'nombre_curso' => 'required',
            
        ]);
         $curso = Curso::findOrFail($id)->update($request->all());
        return redirect()->route('cursos.index')
                        ->with('success','El curso se actualizo correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
   public function destroy($id)
    {
          Curso::findOrFail($id)->delete();
        return redirect()->route('cursos.index')
                        ->with('success','El curso fue eliminado correctamente');
    }
}

