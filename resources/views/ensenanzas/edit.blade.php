@extends('admin.layout')
@section('content')
   <div class="container">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Editar Enseñanza</h2>
            </div>
        </div>
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


    {!! Form::model($ensenanza, ['method' => 'PATCH','route' => ['ensenanzas.update', $ensenanza->id]]) !!}
        @include('ensenanzas.form')
    {!! Form::close() !!}


@endsection