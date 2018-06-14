@extends('admin.layout')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Detalles Del Usuario</h2>
            </div>
            
        </div>
    </div>


    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nombre:</strong>
                {{ $user->name}}
            </div>
        </div>

         <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Rol:</strong>
                {{ $user->role}}
            </div>
    </div>

      <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Ultima Sesión:</strong>
                {{ $user->ultima_sesion}}
            </div>
    </div>




       <div class="col-xs-12 col-sm-12 col-md-12">
    <div class="pull-left">
         <td><a href="{{ route('listados.edit', $user->id)}}" class="btn btn-primary">Editar</a> 
               <a class="btn btn-primary" href="{{ route('listados.index')}}">Volver</a></td>
            </div>
    </div>
     </div>
@endsection