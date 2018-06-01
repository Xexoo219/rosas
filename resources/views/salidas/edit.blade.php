@extends('admin.layout')
@section('content')
   <div class="container">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Editar Salida</h2>
            </div>
        </div>
    </div>
</div>

    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif


    {!! Form::model($salida, ['method' => 'PATCH','route' => ['salidas.update', $salida->id]]) !!}
        @include('salidas.form')
    {!! Form::close() !!}


@endsection