
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
            <strong>Categoria Actual: {{$product->categories->name}}</strong>
        
   <select class="form-control" name="categories_id" id="categories_id">
   
     @foreach($categories as $categorie)
    <option value="{{$categorie->id}}">{{$categorie->name}}</option>
    @endforeach
</select>
        </div>
        </div>

         <div class="col-xs-12 col-sm-12 col-md-12">
      <div class="form-group">
            <strong>Tienda Actual: {{$product->stores->name}}</strong>
        
   <select class="form-control" name="stores_id" id="stores_id">
   
     @foreach($stores as $store)
    <option value="{{$store->id}}">{{$store->name}}</option>
    @endforeach
</select>
        </div>
        </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Precio Actual: {{$product->price}}</strong>
            {!! Form::number('price', null, array('placeholder' => 'Precio','class' => 'form-control','style'=>'height:30px')) !!}
        </div>
    </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Precio De Venta: {{$product->price_sale}}</strong>
            {!! Form::number('price_sale', null, array('placeholder' => 'Precio','class' => 'form-control','style'=>'height:30px')) !!}
        </div>
    </div>
       <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Cantidad De Producto: {{$product->total}}</strong>
            {!! Form::number('total', null, array('placeholder' => 'Cantidad De Producto','class' => 'form-control','style'=>'height:30px')) !!}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
    <a class="btn btn-primary" href="{{ route('products.index') }}"> Volver</a>
            <button type="submit" class="btn btn-primary">Guardar</button>
    </div>
</div>
</div>