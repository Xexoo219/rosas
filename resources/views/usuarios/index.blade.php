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
      <th scope="col">Nombre De Usuario</th>
      <th scope="col">Accion</th>
    </tr>
  </thead>
  <tbody>
  @foreach($users as $user)
    <tr>
    <td><a href="{{ route('users.show', $user->id)}}" class="btn btn-primary">{{$user->id}}</a> </td>
     <td>{{($user->name)}}</td>
  
     <td>
          {!! Form::open(['method' => 'DELETE','route' => ['users.destroy', $user->id],'style'=>'display:inline']) !!}
            {!! Form::submit('Eliminar', ['class' => 'btn btn-danger']) !!}
            {!! Form::close() !!}</td>
</td>
    </tr>
    @endforeach
  </tbody>
       
</table>
  <div class="row">
    <div class="col-md-2 col-md-offset-5">
{!! $users->render() !!}
</div>

</div>
</div>


    @endsection