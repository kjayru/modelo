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
              <h3 class="box-title">Videos</h3>
              <div class="box-tools pull-right">
                <button type="button" class="btn btn-default btn-sm" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-default btn-sm" data-widget="remove"><i class="fa fa-times"></i>
                </button>
              </div>
          </div>

          <div class="box-body">
             
             @if(($limite-$conteo)>0)
                <a href="{{ route('mivideo.create') }}" class="btn btn-primary pull-right btn-new-video" >Crear</a>
             @endif
            <div class="post">
              @if($paquete == 1)
              <p>Puedes cargar 1 video con tu paquete actual</p>
              @endif
              @if($paquete == 2)
               
                <p>No dispones esta opción con tu paquete actual</p>
               
              @endif
                <!-- /.user-block -->
                <div class="row margin-bottom">
                  @foreach($videos as $vid)
                  <div class="col-sm-3">
                      
                      <video src="/{{ $vid->path }}" controls>
                        Tu navegador no implementa el elemento <code>video</code>.
                      </video>
                     <a href="#" data-id="{{ $vid->id }}" data-toggle="modal" data-target="#deluser" class="btn btn-danger btn-delete-mivideo">Borrar</a>
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


  <!-- modal delete-->
<div class="modal modal-danger fade in" id="deluser">
  <div class="modal-dialog">
    <div class="modal-content">


          <form class="deletegal" action="/admin/mivideo/delete" method="POST">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">×</span></button>
                    <h4 class="modal-title">Confirmar Eliminación</h4>
                  </div>
                  <div class="modal-body text-center">

                        <input type="hidden" name="_method" value="delete" >

                        @csrf
                        <input type="hidden" name="id" id="id">
                        <p>¿Esta seguro de eliminar este item?</p>

                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-outline pull-left" data-dismiss="modal">Cancelar</button>
                    <button type="submit" class="btn btn-outline" >Eliminar</button>
                  </div>
                </form>

    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>
@endsection
