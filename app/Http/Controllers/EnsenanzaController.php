<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Estudiante;
use App\Ensenanza; 
use Illuminate\Database\Eloquent\ModelNotFoundException;


class EnsenanzaController extends Controller
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
        
  
  $ensenanzas = Ensenanza::orderBy('id','DESC')->paginate(10);
        return view('ensenanzas.index',compact('ensenanzas'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
           
    }
    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
 public function create()
    {
     
         return view('ensenanzas.create');
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
            'nombre_ensenanza' => 'required|max:9',
        ]);
   

        Ensenanza::create($request->all());
        return redirect()->route('ensenanzas.index')
                        ->with('success','Tipo de enseñanza se creo correctamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
   public function show($id)
    {


        $ensenanza = Ensenanza::findOrFail($id);
        return view('ensenanzas.show',compact('ensenanza'));
      
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
  public function edit($id)
    {
         $ensenanza = Ensenanza::findOrFail($id);
        return view('ensenanzas.edit',compact('ensenanza'));
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
            'nombre_ensenanza' => 'required',
            
        ]);
         $ensenanza = Ensenanza::findOrFail($id)->update($request->all());
        return redirect()->route('ensenanzas.index')
                        ->with('success','Tipo de enseñanza se actualizo correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
   public function destroy($id)
    {
          Ensenanza::findOrFail($id)->delete();
        return redirect()->route('ensenanzas.index')
                        ->with('success','Tipo de enseñanza se elimino correctamente');
    }
}

