@extends('admin.layout')
@section('content')
   <div class="container">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Editar Curso</h2>
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


    {!! Form::model($curso, ['method' => 'PATCH','route' => ['cursos.update', $curso->id]]) !!}
        @include('cursos.form')
    {!! Form::close() !!}


@endsection