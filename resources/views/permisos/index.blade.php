@extends('admin.layout')
@section('content')
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif


<div class="container">
    <div class="row">
        <div class="col-lg-12 margin-tb">
         
         
        
               
           
            </div>
        </div>
    </div>


    <div class="container">
<table class="table table-striped">
  <thead class="thead-active">

    <tr>
      <th scope="col">Codigo</th>
      <th scope="col">Nombre Del Permiso</th>
      <th scope="col">Accion</th>
    </tr>
  </thead>
  <tbody>
  @foreach($permisos as $permiso)
    <tr>
    <td><a href="{{ route('permisos.show', $permiso->id)}}" class="btn btn-primary">{{$permiso->id}}</a> </td>
     <td>{{($permiso->nombre_permiso)}}</td>
  
     <td>
          {!! Form::open(['method' => 'DELETE','route' => ['permisos.destroy', $permiso->id],'style'=>'display:inline']) !!}
            {!! Form::submit('Eliminar', ['class' => 'btn btn-danger']) !!}
            {!! Form::close() !!}</td>
</td>
    </tr>
    @endforeach
  </tbody>
       
</table>
 <a class="btn btn-primary" href="{{ route('permisos.create') }}">Ingresar Permisos</a>
  <div class="row">
    <div class="col-md-2 col-md-offset-5">
{!! $permisos->render() !!}
</div>

</div>
</div>


    @endsection