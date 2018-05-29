@extends('layouts.app')
@section('content')
<h2>Ingresar Cliente</h2>
<form>
	<p>Nombres</p>
	<input class="form-control">

	<p>Apellidos</p>
	<input class="form-control">

	<p>Rut</p>
	<input class="form-control">

	<p>Dirección</p>
	<input class="form-control">

	<p>Ciudad</p>
	<input class="form-control">

	<p>Correo</p>
	<input class="form-control" placeholder="nombre@correo.com">

	<p>Telefono</p>
	<input class="form-control" placeholder="(codigo de región) + 2 + xxxxxxx">

	<p>Celular</p>
	<input class="form-control" placeholder="+569xxxxxxxx">
	<p></p>
	<button type="button" class="btn btn-primary btn-lg"> Guardar Cliente</button>
	<button type="reset" class="btn btn-primary btn-lg"> Restablecer</button>


	</form>
	
@stop