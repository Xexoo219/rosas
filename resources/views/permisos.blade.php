@extends('admin.layout')
@section('content')
    <section class="content-header">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

      <h1>
        SIN PERMISOS. COMUNICARSE CON EL ADMINISTRADOR.
      
      </h1>
    </section>
  <section class="content">

        </div>


        @endsection
