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
                <strong>Nombre:</strong>
                {{ $estudiante->nombres}}
            </div>
        </div>

         <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Apellido:</strong>
                {{ $estudiante->apellidos}}
            </div>
    </div>

      <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Rut:</strong>
                {{ $estudiante->rut}}
            </div>
    </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Codigo de Barra:</strong>
                {{ $estudiante->codigo_barra}}
            </div>
    </div>


    <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Curso:</strong>
                {{ $estudiante->cursos->nombre_curso}}
            </div>
    </div>

     <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Enseñanza:</strong>
                {{ $estudiante->ensenanzas->nombre_ensenanza}}
            </div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Entrada Especial:</strong>
                {{ $estudiante->entrada_especial}}
            </div>
    </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Autorizado Especial de Entrada:</strong>
                {{  $estudiante->permisos->nombre_permiso}}
            </div>
    </div>




    <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Salida Especial:</strong>
                {{ $estudiante->salida_especial}}
            </div>
    </div>
    
         <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Autorizado Especial de Salida:</strong>
                {{ $estudiante->permisos_salida_id}}
            </div>
    </div>  


         <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Autorizado para Almorzar en el Establecimiento:</strong>
                {{ $estudiante->permisos_almuerzo_id}}
            </div>
    </div>  

          <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Autorizado por Actividades UTP:</strong>
                {{ $estudiante->permisos_utp_id}}
            </div>
    </div>  


       <div class="col-xs-12 col-sm-12 col-md-12">
    <div class="pull-left">
          <td><a href="{{ route('ingresos.create')}}" class="btn btn-primary">Ingresar al Establecimiento</a> 
         <td><a href="{{ route('estudiantes.edit', $estudiante->id)}}" class="btn btn-primary">Editar</a> 
               <a class="btn btn-primary" href="{{ route('estudiantes.index')}}">Volver</a></td>
            </div>
    </div>
     </div>
@endsection