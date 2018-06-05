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






    <tr>
      <th scope="col">Acción</th>
      <th scope="col">Nombre Del Estudiante</th>
         <th scope="col">Dia y Hora de Ingreso al Sistema</th>
      
     
   

    </tr>
  </thead>
  <tbody>
  @foreach($salidas as $salida)
    <tr>
    <td><a href="{{ route('salidas.show', $salida->id)}}" class="btn btn-primary">Ver Detalles</a> </td>
      <td>  {{ $salida->estudiantes->nombres}}  {{ $salida->estudiantes->apellidos}}</td>
     <td>{{($salida->created_at)}} {{($salida->hora_salida)}}</td>
    </tr>
    @endforeach

  </tbody>
</table>
<a href="{{ route('salidas.create', $salida->id)}}" class="btn btn-primary">Ingresar retirada del Estudiante</a>
  <div class="row">
    <div class="col-md-2 col-md-offset-5">

{!! $salidas->render() !!}
</div>

</div>
</div>


    @endsection