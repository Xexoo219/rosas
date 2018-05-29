@extends('admin.layout')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Detalles De Enseñanza</h2>
            </div>
            
        </div>
    </div>


    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>ensenanza:</strong>
                {{ $ensenanza->nombre_ensenanza}}
            </div>

        </div>
      
          <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Ingresado:</strong>
                {{$created = $ensenanza->created_at->diffForHumans()}}
           
            </div>
        </div>

         <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Actualizado:</strong>
                {{ $ensenanza->updated_at->diffForHumans()}}
            </div>
        </div>
    

       <div class="col-xs-12 col-sm-12 col-md-12">
    <div class="pull-left">
         <td> <a href="{{ route('ensenanzas.edit', $ensenanza->id)}}" class="btn btn-primary">Editar</a>
         <a class="btn btn-primary" href="{{ route('ensenanzas.index')}}">Volver</a> </td>
            </div>
    </div>
     </div>
@endsection