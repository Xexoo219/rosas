@extends('admin.layout')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Ingreso de los Permisos</h2>
                <p>&nbsp</p>
            </div>
        </div>
    


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


    {!! Form::open(array('route' => 'permisos.store','method'=>'POST')) !!}
      @include('permisos.form')
   
    {!! Form::close() !!}


@endsection