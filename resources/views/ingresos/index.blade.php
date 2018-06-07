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


   <h1>
        <small>Historico de Ingresos</small>
      </h1>


    <tr>
      <th scope="col">Nº</th>
      <th scope="col">Nombre Del Estudiante</th>
            <th scope="col">Permiso de Entrada</th>
         <th scope="col">Dia y Hora que Ingresa el Alumno</th>
      
     
   

    </tr>
  </thead>
  <tbody>
  @foreach($ingresos as $ingreso)
    <tr>
    <td><a href="{{ route('ingresos.show', $ingreso->estudiantes_id)}}" class="btn btn-primary">{{$ingreso->id}}</a> </td>
      <td>  {{ $ingreso->estudiantes->nombres}}  {{ $ingreso->estudiantes->apellidos}}</td>
      <td>  {{ $ingreso->estudiantes->permisos_entrada_id}}</td>
     <td>{{($ingreso->created_at)}}</td>
    </tr>
    @endforeach

  </tbody>
</table>
{!! $ingresos->render() !!}
<a href="{{ route('ingresos.create', $ingreso->id)}}" class="btn btn-primary">Ingresar</a>

</div>


    @endsection