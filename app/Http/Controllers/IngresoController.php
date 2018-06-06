<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Estudiante;
use App\Curso;
use App\Ensenanza;
use App\Permiso;
use App\Comida;
use App\Ingreso;
use DB;
class IngresoController extends Controller
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
        $ingresos = Ingreso::orderBy('id','DESC')->paginate(20);
        return view('ingresos.index',compact('ingresos','ensenanza','permiso','estudiante'))
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
         return view('ingresos.index',compact('estudiante'));
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

      Ingreso::create($request->all());  
        return redirect()->route('ingresos.create')
                        ->with('success','Alumno es retirado correctamente');
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
        return view('ingresos.show',compact('ingreso','curso','ensenanza','estudiante'));
      
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $ingreso = Ingreso::findOrFail($id);
        $categories = Category::all();
        $stores = Store::all();
        return view('ingresos.edit',compact('ingreso','categories','stores'));
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
        Ingreso::findOrFail($id)->update($request->all());
        return redirect()->route('ingresos.index')
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
           Ingreso::findOrFail($id)->delete();
        return redirect()->route('ingresos.index')
                        ->with('success','Producto eliminado correctamente');
    }


}

