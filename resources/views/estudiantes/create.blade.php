@extends('admin.layout')
@section('content')

    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <strong>Ooops!</strong> Hubo algunos problemas.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

<div class="container">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Ingresar Estudiante</h2>
            </div>
        </div>
    




    {!! Form::open(array('route' => 'estudiantes.store','method'=>'POST')) !!}
        
   <div class="container">
<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Nombres:</strong>
            {!! $name =Form::text('nombres', null, array('placeholder' => 'Nombres','class' => 'form-control', 'upper')) !!}
        </div>
    </div>
   <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Apellidos:</strong>
            {!! $name =Form::text('apellidos', null, array('placeholder' => 'Apellidos','class' => 'form-control', 'upper')) !!}
        </div>
    </div>

          <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Rut:</strong>
         {!! $name =Form::text('rut', null, array('placeholder' => 'Ejemplo 16838100k, Dejarlo en blanco al no poseer rut','class' => 'form-control', 'upper')) !!}
        </div>
    </div>
      <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Domicilio:</strong>
         {!! $name =Form::text('domicilio', null, array('placeholder' => 'Ejemplo PARRAL','class' => 'form-control', 'upper')) !!}
        </div>
    </div>

     <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Codigo de Barra:</strong>
            {!! $name =Form::text('codigo_barra', null, array('placeholder' => 'Codigo de Barra 0000001','class' => 'form-control', 'upper')) !!}
        </div>
    </div>

       <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
          <strong>Curso:</strong>
<select class="form-control" name="cursos_id" id="cursos_id">
    <option value="">Seleccione Un Curso</option>
     @foreach($curso as $cursos)
    <option value="{{$cursos->id}}">{{$cursos->nombre_curso}}</option>
    @endforeach
</select>
</div>
</div>


 <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
          <strong>Enseñanza:</strong>
<select class="form-control" name="ensenanzas_id" id="ensenanzas_id">
    <option value="">Seleccione Enseñanza</option>
     @foreach($ensenanza as $ensenanzas)
    <option value="{{$ensenanzas->id}}">{{$ensenanzas->nombre_ensenanza}}</option>
    @endforeach
</select>
</div>
</div>


  <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Entrada Especial:</strong>
           {!! $name =Form::text('entrada_especial', null, array('placeholder' => 'Hasta 08:30 hrs Lunes a Viernes, Dejarlo en blanco al no poseer permiso','class' => 'form-control', 'upper')) !!}
        </div>
    </div>

 <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
          <strong>Autorizado Especial de Entrada:</strong>
    {!! $name =Form::text('permisos_entrada_id', null, array('placeholder' => 'SI O NO','class' => 'form-control', 'upper')) !!}
        </div>
    </div>



  <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Salida Especial:</strong>
           {!! $name =Form::text('salida_especial', null, array('placeholder' => 'Lunes: de 13:15 A 15:00 HRS, Miercoles: de 13:15 a 15:00 HRS, Dejarlo en blanco al no poseer permiso','class' => 'form-control', 'upper')) !!}
        </div>
    </div>

     <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
   <strong>Autorizado Especial de Salida:</strong>
       {!! $name =Form::text('permisos_salida_id', null, array('placeholder' => 'SI O NO','class' => 'form-control')) !!}
        </div>
    </div>


<div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
 <strong>Autorizado para Almorzar en el Establecimiento:</strong>
       {!! $name =Form::text('permisos_almuerzo_id', null, array('placeholder' => 'SI O NO','class' => 'form-control', 'upper')) !!}
        </div>
    </div>


<div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
 <strong>Autorizado por Actividades UTP:</strong>
       {!! $name =Form::text('permisos_utp_id', null, array('placeholder' => 'SI O NO','class' => 'form-control', 'upper')) !!}
        </div>
    </div>



     <div class="col-xs-12 col-sm-12 col-md-12">
       <button type="submit" class="btn btn-primary">Guardar</button>
    <a class="btn btn-primary" href="{{ route('estudiantes.index') }}"> Volver</a>
    </div>
</div>

   
    {!! Form::close() !!}


@endsection