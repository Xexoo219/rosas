@extends('admin.layout')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Detalles De Enseñanza</h2>
            </div>
            
        </div>
    </div>


    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
            <h3>    <strong>Nombre:</strong> 
                {{ $estudiantes->nombres}} </h3>
            </div>
        </div>

         <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
            <h3>    <strong>Apellido:</strong>
                {{ $estudiantes->apellidos}} </h3>
            </div>
    </div>


    <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
       <h3>         <strong>Curso:</strong>
                {{ $estudiantes->cursos->nombre_curso}}</h3>
            </div>
    </div>

     <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
        <h3>        <strong>Enseñanza:</strong>
                {{ $estudiantes->ensenanzas->nombre_ensenanza}}</h3>
            </div>
    </div>

       <div class="col-xs-12 col-sm-12 col-md-12">
    <div class="pull-left">
         <td> <a href="{{ route('ensenanzas.edit', $ensenanza->id)}}" class="btn btn-primary">Editar</a>
         <a class="btn btn-primary" href="{{ route('ensenanzas.index')}}">Volver</a> </td>
            </div>
    </div>
     </div>
@endsection