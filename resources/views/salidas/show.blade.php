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
            <h3>    <strong>Rut:</strong>
                {{ $estudiante->rut}} </h3>
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
                <strong>Ingresado:</strong>
                {{$created = $salida->created_at}}
           
            </div>
        </div>


       <div class="col-xs-12 col-sm-12 col-md-12">
    <div class="pull-left">
        <td><a href="{{ route('salidas.create')}}" class="btn btn-primary">Retirar Estudiante</a>
  <!--       <td><a href="{{ route('estudiantes.edit', $estudiante->id)}}" class="btn btn-primary">Editar</a> -->
               <a class="btn btn-primary" href="{{ route('salidas.index')}}">Volver</a></td>
            </div>
    </div>
     </div>
@endsection