@extends('admin.layout')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Detalles Del Estudiante</h2>
            </div>
            
        </div>
    </div>


    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
            <h3>    <strong>Nombre:</strong> 
                {{ $estudiante->nombres}} </h3>
            </div>
        </div>

         <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
            <h3>    <strong>Apellido:</strong>
                {{ $estudiante->apellidos}} </h3>
            </div>
    </div>


    <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
       <h3>         <strong>Curso:</strong>
                {{ $estudiante->cursos->nombre_curso}}</h3>
            </div>
    </div>

     <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
        <h3>        <strong>Enseñanza:</strong>
                {{ $estudiante->ensenanzas->nombre_ensenanza}}</h3>
            </div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
        <h3>        <strong>Autorización para Almorzar:</strong>
                {{ $estudiante->permisos_almuerzo_id}}</h3>
            </div>
    </div>

      <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
            <h3> <strong>Ingresado:</strong>
                {{$created = $comida->created_at}}</h3>
           
            </div>
        </div>


       <div class="col-xs-12 col-sm-12 col-md-12">
    <div class="pull-left">
         <a class="btn btn-primary" href="{{ route('comidas.index')}}">Volver</a> </td>
            </div>
    </div>
     </div>
@endsection