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
            <h3>    <strong>Domicilio:</strong>
                {{ $estudiante->domicilio}} </h3>
            </div>
    </div>

         <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
            <h3>    <strong>Comuna:</strong>
                {{ $estudiante->comuna}} </h3>
            </div>
    </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
           <h3>     <strong>Codigo de Barra:</strong>
                {{ $estudiante->codigo_barra}} </h3>
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
            <h3>    <strong>Entrada Especial:</strong>
                {{ $estudiante->entrada_especial}} </h3>
            </div>
    </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
           <h3>     <strong>Autorizado Especial de Entrada:</strong>
                {{  $estudiante->permisos_entrada_id}}</h3>
            </div>
    </div>




    <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
             <h3>   <strong>Salida Especial:</strong>
                {{ $estudiante->salida_especial}}</h3>
            </div>
    </div>
    
         <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
             <h3>   <strong>Autorizado Especial de Salida:</strong>
                {{ $estudiante->permisos_salida_id}}</h3>
            </div>
    </div>  


         <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
          <h3>      <strong>Autorizado para Almorzar en el Establecimiento:</strong>
                {{ $estudiante->permisos_almuerzo_id}}</h3>
            </div>
    </div>  

     
       <div class="col-xs-12 col-sm-12 col-md-12">
    <div class="pull-left">
          <td><a href="{{ route('ingresos.create')}}" class="btn btn-primary">Ingresar al Establecimiento</a> 
  <!--       <td><a href="{{ route('estudiantes.edit', $estudiante->id)}}" class="btn btn-primary">Editar</a> -->
               <a class="btn btn-primary" href="{{ route('estudiantes.index')}}">Volver</a></td>
            </div>
    </div>
     </div>
@endsection