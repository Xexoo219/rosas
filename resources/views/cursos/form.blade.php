
   <div class="container">
<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Nombre del curso:</strong>
            {!! $nombre_curso =Form::text('nombre_curso', null, array('placeholder' => '1A','maxlength' <= 300,'class' => 'form-control', 'upper')) !!}
        </div>
    </div>  
    <div class="col-xs-12 col-sm-12 col-md-12">
            <button type="submit" class="btn btn-primary">Guardar</button>
    </div>
</div>
</div>