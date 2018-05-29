<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Estudiante;
use App\Curso; 
use App\User; 
use DB;
use Illuminate\Database\Eloquent\ModelNotFoundException;


class UserController extends Controller
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
        
  
  $users = User::orderBy('id','DESC')->paginate(10);
        return view('users.index',compact('users'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
           
    }
    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
 public function create()
    {
     
         return view('users.create');
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
            'name' => 'required',
        ]);
   

        User::create($request->all());
        return redirect()->route('users.index')
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


        $user = User::findOrFail($id);
        return view('users.show',compact('user'));
      
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
  public function edit($id)
    {
         $user = User::findOrFail($id);
        return view('users.edit',compact('user'));
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
            
        ]);
         $user = User::findOrFail($id)->update($request->all());
        return redirect()->route('users.index')
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
          User::findOrFail($id)->delete();
        return redirect()->route('users.index')
                        ->with('success','El curso fue eliminado correctamente');
    }
}

