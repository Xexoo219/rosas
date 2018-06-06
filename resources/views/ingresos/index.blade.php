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
      <th scope="col">Codigo</th>
      <th scope="col">Nombre Del Estudiante</th>
         <th scope="col">Dia y Hora que Ingresa el Alumno</th>
      
     
   

    </tr>
  </thead>
  <tbody>
  @foreach($ingresos as $ingreso)
    <tr>
    <td><a href="{{ route('ingresos.show', $ingreso->estudiantes_id)}}" class="btn btn-primary">{{$ingreso->id}}</a> </td>
      <td>  {{ $ingreso->estudiantes->nombres}}  {{ $ingreso->estudiantes->apellidos}}</td>
     <td>{{($ingreso->created_at)}}</td>
    </tr>
    @endforeach

  </tbody>
</table>
{!! $ingresos->render() !!}
<a href="{{ route('ingresos.create', $ingreso->id)}}" class="btn btn-primary">Ingresar Comida</a>

</div>


    @endsection