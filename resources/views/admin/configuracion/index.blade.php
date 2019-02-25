@extends('layouts.admin.master')
@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
      Configuraciones
  </h1>
  <ol class="breadcrumb">
      <li><a href="/admin"><i class="fa fa-dashboard"></i> Dashboard</a></li>
      <li class="active">Configuraciones</li>
      
  </ol>


      @if(session('info'))
          <div class="container">
              <div class="row">
                  <div class="col-md-12">
                      <div class="alert alert-success">
                          {{ session('info')}}
                      </div>
                  </div>
              </div>
          </div>
      @endif

</section>              
<section class="content"> 
<div class="container-fluid spark-screen">
<div class="row">

    @if(session('info'))
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
<div class="col-lg-6 connectedSortable ui-sortable">
    <div class="box box-info">
        <div class="box-header ui-sortable-handle" style="cursor: move;">
          <i class="fa fa-folder"></i>

          <h3 class="box-title">Regiones</h3>
        </div>
        <div class="box-body">
          <div class="table-responsive">
            <table class="table no-margin">
              <thead>
                <th>Nombre</th>
                <th>Estado</th>
                <th></th>
              </thead>
              <tbody>
              @foreach($regiones as $k => $region) 
                <tr>
                  <td>{{ $region->name }}</td>
                  <td>
                  <div class="form-group">
                      <span class="switch switch-sm">
                        <input data-id="{{$region->id}}" type="checkbox" @if(@$region->status == 2) checked  @endif  class="switch estado-region" id="switch-sm-{{$k+1}}">
                        <label for="switch-sm-{{$k+1}}"></label>
                      </span>
                  </div>
                  </td>
                  <td><a class="btn btn-xs btn-primary" href="#" data-id="{{ $region->id }}">Editar</a></td>
                </tr>
              @endforeach
              </tbody>
            </table>
          </div>
        </div>

        
    </div>
         <!-- /.box-body -->
</div>

<div class="col-lg-6 connectedSortable ui-sortable">
    <div class="box box-info">
        <div class="box-header ui-sortable-handle" style="cursor: move;">
          <i class="fa fa-folder"></i>

          <h3 class="box-title">Servicios</h3>
        </div>
        <div class="box-body">
          <div class="table-responsive">
            <table class="table no-margin">
              <thead>
                <th>Nombre</th>
                <th>Estado</th>
                <th></th>
                <th></th>
              </thead>
              <tbody>
              @foreach($servicios as $k => $servicio) 
                <tr>
                  <td>{{ $servicio->name }}</td>
                  <td>
                  <div class="form-group">
                      <span class="switch switch-sm">
                        <input data-id="{{$servicio->id}}" type="checkbox" @if(@$servicio->status == 2) checked  @endif  class="switch estado-servicio" id="switch-sm-{{$k+1}}">
                        <label for="switch-sm-{{$k+1}}"></label>
                      </span>
                  </div>
                  </td>
                  <td><a class="btn btn-xs btn-primary" href="#" data-id="{{ $region->id }}">Editar</a></td>
                  <td><a class="btn btn-xs btn-danger" href="#" data-id="{{ $region->id }}">Borrar</a></td>
                </tr>
              @endforeach
              </tbody>
            </table>
          </div>
        </div>
        <div class="box-footer clearfix">
              <a href="javascript:void(0)" class="btn btn-sm btn-info btn-flat pull-left">Nuevo</a>
        </div>
    </div>



    <div class="box box-info">
        <div class="box-header ui-sortable-handle" style="cursor: move;">
          <i class="fa fa-folder"></i>

          <h3 class="box-title">Caracteristicas</h3>
        </div>
        <div class="box-body">
          <div class="table-responsive">
            <table class="table no-margin">
              <thead>
                <th>Nombre</th>
                <th>Estado</th>
                <th></th>
                <th></th>
              </thead>
              <tbody>
              @foreach($characters as $k => $caracter) 
                <tr>
                  <td>{{ $caracter->name }}</td>
                  <td>
                  <div class="form-group">
                      <span class="switch switch-sm">
                        <input data-id="{{$caracter->id}}" type="checkbox" @if(@$caracter->status == 2) checked  @endif  class="switch estado-caracter" id="switch-sm-{{$k+1}}">
                        <label for="switch-sm-{{$k+1}}"></label>
                      </span>
                  </div>
                  </td>
                  <td><a class="btn btn-xs btn-primary" href="#" data-id="{{ $region->id }}">Editar</a></td>
                  <td><a class="btn btn-xs btn-danger" href="#" data-id="{{ $region->id }}">Borrar</a></td>
                </tr>
              @endforeach
              </tbody>
            </table>
          </div>
        </div>
        <div class="box-footer clearfix">
            <a href="javascript:void(0)" class="btn btn-sm btn-info btn-flat pull-left">Nuevo</a>
      </div>
    </div>
</div>
<!-- /.box -->

</div>
</div>
</div>
</section>

<!-- modal delete-->
<div class="modal modal-danger fade in" id="deluser">
  <div class="modal-dialog">
    <div class="modal-content">


          <form class="deleterole" action="/admin/roles/delete" method="POST">
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

  <!-- /.content -->
@endsection
