@extends('admin.layout')
@section('content')

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <div class="container">
<table class="table table-striped">
  <thead class="thead-active">

{!! Form::open([ 'route' => 'estudiantes.index','method' => 'GET', 'class' => 'navbar-form navbar-left pull-right', 'role' => 'search']) !!}


{!! Form::text('fecha', null, ['class' => 'form-control', 'placeholder' => 'Seleccione Fecha Exacta que Desea Buscar']) !!}





    <tr>
      <th scope="col">Codigo</th>
      <th scope="col">Nombre Del Estudiante</th>
         <th scope="col">Dia y Hora de Ingreso al Colegio</th>
      
     
   

    </tr>
  </thead>
  <tbody>
  @foreach($ingresos as $ingreso)
    <tr>
    <td><a href="{{ route('ingresos.show', $ingreso->id)}}" class="btn btn-primary">{{$ingreso->estudiantes->codigo_barra}}</a> </td>
      <td>  {{ $ingreso->estudiantes->nombres}}  {{ $ingreso->estudiantes->apellidos}}</td>
     <td>{{($ingreso->created_at)}}</td>
    </tr>
    @endforeach

  </tbody>
</table>
<a href="{{ route('ingresos.create', $ingreso->id)}}" class="btn btn-primary">Ingresar al Establecimiento</a>
  <div class="row">
    <div class="col-md-2 col-md-offset-5">

{!! $ingresos->render() !!}
</div>

</div>
</div>


    @endsection