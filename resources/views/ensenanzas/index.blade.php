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
      <th scope="col">Nombre De Enseñanzas</th>
    </tr>
  </thead>
  <tbody>
  @foreach($ensenanzas as $ensenanza)
    <tr>
    <td><a class="btn btn-primary">{{$ensenanza->id}}</a> </td>
     <td>{{($ensenanza->nombre_ensenanza)}}</td>
  
  <!--   <td>
          {!! Form::open(['method' => 'DELETE','route' => ['ensenanzas.destroy', $ensenanza->id],'style'=>'display:inline']) !!}
            {!! Form::submit('Eliminar', ['class' => 'btn btn-danger']) !!}
            {!! Form::close() !!}</td> -->
</td>
    </tr>
    @endforeach
  </tbody>
       
</table>
 <!-- <a class="btn btn-primary" href="{{ route('ensenanzas.create') }}">Ingresar enseñanza</a> -->
  <div class="row">
    <div class="col-md-2 col-md-offset-5">
{!! $ensenanzas->render() !!}
</div>

</div>
</div>


    @endsection