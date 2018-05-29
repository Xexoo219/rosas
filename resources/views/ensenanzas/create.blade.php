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
<div class="container">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Ingreso de Enseñanzas</h2>
                <p>&nbsp</p>
            </div>
        </div>
    


  

    {!! Form::open(array('route' => 'ensenanzas.store','method'=>'POST')) !!}
      @include('ensenanzas.form')
   
    {!! Form::close() !!}


@endsection