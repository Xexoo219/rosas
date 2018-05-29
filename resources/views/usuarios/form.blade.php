
   <div class="container">
<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Nombre del tipo de Enseñanza:</strong>
            {!! $name =Form::text('name', null, array('placeholder' => 'Nombre','class' => 'form-control', 'upper')) !!}
        </div>
    </div>  
    <div class="col-xs-12 col-sm-12 col-md-12">
            <button type="submit" class="btn btn-primary">Guardar</button>
    </div>
</div>
</div>