
   <div class="container">
<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Nombre:</strong>
            {!! $name =Form::text('name', null, array('placeholder' => 'Nombre','class' => 'form-control', 'upper')) !!}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Role Actual: {{$user->role}}</strong>
            {!! Form::text('role', null, array('placeholder' => 'Administrador, Inspector, Alimentacion','class' => 'form-control','style'=>'height:30px')) !!}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
    <a class="btn btn-primary" href="{{ route('listados.index') }}"> Volver</a>
            <button type="submit" class="btn btn-primary">Guardar</button>
    </div>
</div>
</div>