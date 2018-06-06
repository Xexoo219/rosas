<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Estudiante;
use App\Curso;
use App\Ensenanza;
use App\Permiso;
use App\Comida;
use DB;
class ComidaController extends Controller
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
      // $products = Product::all();
        //return view('product')->with('products',$products);

         //   $products = Product::select('products.id','products.name as product','price','marks.name as mark')->join('marks','marks.id','=','products.marks_id')->get();
           //  return view('products.index',compact('products'))
        $estudiante = Estudiante::all();
        $curso = Curso::all();
        $ensenanza = Ensenanza::all();
        $permiso = Permiso::all();
                    
        $comidas = Comida::orderBy('id','DESC')->paginate(20);
        return view('comidas.index',compact('comidas','ensenanza','permiso','estudiante'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $estudiante = Estudiante::all();
         return view('comidas.create',compact('estudiante'));
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
    'estudiantes_id' => 'required',

       ]);

      Comida::create($request->all());  
        return redirect()->route('comidas.create')
                        ->with('success','Alumno con su almuerzo fue ingresado correctamente');
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
        $permisos_entrada = Permiso::all();
        $estudiante = Estudiante::findOrFail($id);
        $ingreso = Ingreso::findOrFail($id);
        $comida = Comida::all();
        return view('comidas.show',compact('comida','ingreso','curso','ensenanza','estudiante'));
      
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $comida = Comida::findOrFail($id);
        $categories = Category::all();
        $stores = Store::all();
        return view('comidas.edit',compact('comida','categories','stores'));
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
            'name' => 'required',
            'price' => 'required',
            
        ]);
        Comida::findOrFail($id)->update($request->all());
        return redirect()->route('comidas.index')
                        ->with('success','Producto actualizado correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
           Comida::findOrFail($id)->delete();
        return redirect()->route('comidas.index')
                        ->with('success','Producto eliminado correctamente');
    }


}

