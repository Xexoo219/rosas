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


</div>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Funcionario Activo</th>
      <th scope="col">Cargo</th>
       <th scope="col">Ultima Vez Activo</th>
      <th scope="col">IP</th>
      <th scope="col">Fecha de Ingreso</th>
      
     
   

    </tr>
  </thead>
  <tbody>
  @foreach($users as $user)
    <tr>
    <td><a>{{$user->id}}</a> </td>
     <td>  {{ $user->name}}</td>
    <td>  {{ $user->name}}</td>
       <td>  {{ $user->name}}</td>
   <td>  {{ $user->name}}</td>
      <td>{{ $user->created_at}}</td>
    </tr>
    @endforeach

  </tbody>
</table>

  <div class="row">
    <div class="col-md-2 col-md-offset-5">


</div>

</div>
</div>


    @endsection