@extends('admin.layout')
@section('content')
    <section class="content-header">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

      <h1>
        Dashboard
        <small>Panel de control</small>
      </h1>
    </section>
  <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3>{{ DB::table('estudiantes')->count('id')}}</h3>
                <sup style="font-size: 20px">&nbsp</sup></h3>
              <p>Total de Alumnos</p>
            </div>
            <div class="icon">
              <i class="ion-android-contact"></i>
            </div>
            <a href="{{route('estudiantes.index')}}" class="small-box-footer">Más información <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <h3>{{ DB::table('comidas')->count('id')}}</h3>
              <sup style="font-size: 20px">&nbsp</sup></h3>

              <p>Total de Alimentos</p>
            </div>
            <div class="icon">
              <i class="ion ion-fork"></i>
            </div>
            <a href="{{route('comidas.index')}}" class="small-box-footer">Más información <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-purple">
            <div class="inner">
          <h3>{{ DB::table('ingresos')->count('id')}}</h3>
              <sup style="font-size: 20px">&nbsp</sup>

              <p>Total con Entrada</p>
            </div>
            <div class="icon">
              <i class="ion ion-ios-home"></i>
            </div>
            <a href="{{route('ingresos.index')}}" class="small-box-footer">Más información <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->


                <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-teal">
            <div class="inner">
          <h3>{{ DB::table('ingresos')->count('id')}}</h3>
              <sup style="font-size: 20px">&nbsp</sup>

              <p>Total con Salida</p>
            </div>
            <div class="icon">
              <i class="ion ion-ios-home"></i>
            </div>
            <a href="{{route('ingresos.index')}}" class="small-box-footer">Más información <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
    

 <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-orange">
            <div class="inner">
              <h3>{{ DB::table('cursos')->count('id') + 9}}</h3>
                 <sup style="font-size: 20px">&nbsp</sup>
              <p>Cursos - 2018</p>
            </div>
            <div class="icon">
              <i class="fa fa-university"></i>
            </div>
            <a href="{{route('cursos.index')}}" class="small-box-footer">Más información <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>


 <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-maroon">
            <div class="inner">
              <h3>{{ DB::table('ensenanzas')->count('id')}}</h3>
                 <sup style="font-size: 20px">&nbsp</sup>
              <p>Enseñanzas - 2018</p>
            </div>
            <div class="icon">
             <i class="fa fa-etsy"></i>
            </div>
            <a href="{{route('ensenanzas.index')}}" class="small-box-footer">Más información <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>



         <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-olive">
            <div class="inner">
              <h3>{{ DB::table('users')->count('id')}}</h3>
                 <sup style="font-size: 20px">&nbsp</sup>
              <p>Usuarios Activos</p>
            </div>
            <div class="icon">
             <i class="fa fa-users"></i>
            </div>
            <a href="" class="small-box-footer">Más información <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>

        <!-- ./col -->
      </div>
      <!-- /.row -->
      <!-- Main row -->
@stop