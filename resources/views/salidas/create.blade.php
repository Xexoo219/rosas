@extends('admin.layout')
@section('content')

  @if (count($errors) > 0)
        <div class="alert alert-danger">
      <strong>Ooops!</strong> Hubo algunos problemas con su entrada.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif


    @if ($message = Session::get('success'))
        <div class="alert alert-success">
          
            <p>{{ $message }}</p>
              
        </div>
    @endif


<div class="container">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">

                <h2>Ingresar Estudiante a Retirar</h2>
                <p>&nbsp</p>
            </div>
        </div>
    


  

    {!! Form::open(array('route' => 'salidas.store','method'=>'POST')) !!}


      <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
          <strong>Ingrese codigo de barra:</strong>
<select class="form-control" name="estudiantes_id" id="estudiantes_id">
    <option value="">Presione</option>
     @foreach($estudiante as $estudiantes)
    <option value="{{$estudiantes->id}}">{{$estudiantes->codigo_barra}} - {{$estudiantes->nombres}} {{$estudiantes->apellidos}}</option>
    @endforeach
</select>
</div>
</div>


 <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Ingresar Algun Motivo:</strong>
            {!! $name =Form::text('motivo', null, array('placeholder' => 'Personal','class' => 'form-control', 'upper')) !!}
        </div>
    </div>

     <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Ingresar Hora de Salida:</strong>
            {!! $name =Form::text('hora_salida', null, array('placeholder' => '13:00','class' => 'form-control', 'upper')) !!}
        </div>
    </div>

     <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Ingresar Persona Responsable:</strong>
            {!! $name =Form::text('persona_responsable', null, array('placeholder' => 'Nombre y Apellidos','class' => 'form-control', 'upper')) !!}
        </div>
    </div>

     <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Ingresar Telefono:</strong>
            {!! $name =Form::text('telefono', null, array('placeholder' => '56984536000','class' => 'form-control', 'upper')) !!}
        </div>
    </div>




    <div class="col-xs-12 col-sm-12 col-md-12">
       <button type="submit" class="btn btn-primary">Guardar</button>
    <a class="btn btn-primary" href="{{ route('estudiantes.index') }}"> Volver</a>
    </div>

   
    {!! Form::close() !!}


@endsection