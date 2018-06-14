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
            <h3>    <strong>Nombre:</strong> 
                {{ $user->name}} </h3>
            </div>
        </div>

         <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
            <h3>    <strong>Rol:</strong> 
                {{ $user->role}} </h3>
            </div>
        </div>

         <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
            <h3>    <strong>Email:</strong> 
                {{ $user->email}} </h3>
            </div>
        </div>

     <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
            <h3>    <strong>Ultima Sesión:</strong> 
                {{ $user->ultima_sesion}} </h3>
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