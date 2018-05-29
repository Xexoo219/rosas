
   <div class="container">
<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Nombre del tipo de Enseñanza:</strong>
            {!! $nombre_ensenanza =Form::text('nombre_ensenanza', null, array('placeholder' => 'BASICA','class' => 'form-control', 'upper')) !!}
        </div>
    </div>  
    <div class="col-xs-12 col-sm-12 col-md-12">
            <button type="submit" class="btn btn-primary">Guardar</button>
    </div>
</div>
</div>