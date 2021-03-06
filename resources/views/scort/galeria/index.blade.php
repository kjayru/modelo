@extends('layouts.admin.master')
@section('content')
 <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Dashboard
      <small>Control panel</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active">Dashboard</li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
    <!-- Small boxes (Stat box) -->
    <div class="row">
      <div class="col-md-12">
        <!-- small box -->
       <div class="box box-solid">
          <div class="box-header">
              <i class="fa fa-bar-chart-o"></i>
              <h3 class="box-title">Galeria de fotos</h3>
              <div class="box-tools pull-right">
                <button type="button" class="btn btn-default btn-sm" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-default btn-sm" data-widget="remove"><i class="fa fa-times"></i>
                </button>
              </div>
          </div>

          <div class="box-body">
             
             @if(($limite-$conteo)>0)
                <a href="{{ route('migaleria.create') }}" class="btn btn-primary pull-right btn-new-gallery" >Crear</a>
             @endif
            <div class="post">
              @if($paquete == 1)
              <p>Puedes cargar fotos sin limite con tu paquete actual</p>
              @endif
              @if($paquete == 2)
                @if(($limite-$conteo)>0)
                <p>Dispones de {{ $limite - $conteo}} fotos , con tu paquete actual</p>
                @else
                <p>Ya no dispones para subir mas fotos con tu paquete actual</p>
                @endif
              @endif
                <!-- /.user-block -->
                <div class="row margin-bottom">
                  @foreach($galerias as $gal)
                  <div class="col-sm-3">
                    <img class="img-responsive" src="/storage/{{ $gal->photo }}" alt="Photo">
                  </div>
                  @endforeach
                  <!-- /.col -->
                  
                  <!-- /.col -->
                </div>
               
            </div>

          </div>
        </div>
         
      </div>    
    </div>

  </section>
  <!-- /.content -->
@endsection
