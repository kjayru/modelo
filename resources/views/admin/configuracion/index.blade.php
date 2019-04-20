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



</section>              
<section class="content"> 
<div class="container-fluid spark-screen">
<div class="row">

    @if(session('info'))
    <div class="alert alert-success">
        <ul>
           
                <li> {{ session('info')}}</li>
           
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
                        <input data-id="{{$region->id}}" data-status="{{@$region->status }}" type="checkbox" @if(@$region->status == 2) checked  @endif  class="switch estado-region" id="switch-sm-{{$k+1}}">
                        <label for="switch-sm-{{$k+1}}"></label>
                      </span>
                  </div>
                  </td>
                  <td><a class="btn btn-xs btn-primary btn-edit-region" href="#" data-id="{{ $region->id }}">Editar</a></td>
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
                        <input data-id="{{$servicio->id}}" data-status="{{@$servicio->status }}" type="checkbox" @if(@$servicio->status == 2) checked  @endif  class="switch estado-servicio" id="switch-sm-s{{$k+1}}">
                        <label for="switch-sm-s{{$k+1}}"></label>
                      </span>
                  </div>
                  </td>
                  <td width="10"><a class="btn btn-xs btn-primary btn-servicio-edit" href="#" data-id="{{ $servicio->id }}">Editar</a></td>
                  <td><a class="btn btn-xs btn-danger btn-servicio-delete" href="#" data-toggle="modal" data-target="#deluser" data-id="{{ $servicio->id }}">Borrar</a></td>
                </tr>
              @endforeach
              </tbody>
            </table>
          </div>
        </div>
        <div class="box-footer clearfix">
              <a href="#" class="btn btn-sm btn-info btn-new-servicio btn-flat pull-left" data-toggle="modal" data-target="#modal-nuevo">Nuevo</a>
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
                        <input data-id="{{$caracter->id}}" data-status="{{@$caracter->status }}" type="checkbox" @if(@$caracter->status == 2) checked  @endif  class="switch estado-caracter" id="switch-sm-c{{$k+1}}">
                        <label for="switch-sm-c{{$k+1}}"></label>
                      </span>
                  </div>
                  </td>
                  <td width="10"><a class="btn btn-xs btn-primary btn-caracter-edit" href="#" data-id="{{ $caracter->id }}">Editar</a></td>
                  <td><a class="btn btn-xs btn-danger btn-caracter-delete" href="#" data-toggle="modal" data-target="#deluser" data-id="{{ $caracter->id }}">Borrar</a></td>
                </tr>
              @endforeach
              </tbody>
            </table>
          </div>
        </div>
        <div class="box-footer clearfix">
            
            <a href="javascript:void(0)" class="btn btn-sm btn-info btn-new-caracter btn-flat pull-left" data-toggle="modal" data-target="#modal-nuevo">Nuevo</a>
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


          <form class="deleteconf" action="/admin/roles/delete" method="POST">
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


<!--- modal nuevo-->
<div class="modal  fade in" id="modal-nuevo">
    <div class="modal-dialog">
      <div class="modal-content">
        <form action="" class="form-horizontal" method="POST">
          @csrf
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span></button>
            <h4 class="modal-title">Default Modal</h4>
          </div>
          <div class="modal-body">
              <div class="form-group">
                <label class="col-md-2" for="name">Nombre</label>
                <div class="col-md-10">
                   <input  class=" form-control"type="text" name="name" id="name" required>
                </div>
              </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Cerrar</button>
            <button type="submit" class="btn btn-primary">Guardar</button>
          </div>
      </form>
      </div>
      <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
  </div>


  <!--- modal editar-->
<div class="modal  fade in" id="modal-editar">
  <div class="modal-dialog">
    <div class="modal-content">
      <form action="" class="form-horizontal" method="POST" id="fr-editar">
        @csrf
        <input type="hidden" name="id">
        <input type="hidden" name="_method" value="PUT">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span></button>
          <h4 class="modal-title">Default Modal</h4>
        </div>
        <div class="modal-body">
            <div class="form-group">
              <label class="col-md-2" for="name">Nombre</label>
              <div class="col-md-10">
                 <input  class=" form-control"type="text" name="name" id="name" required>
              </div>
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Cerrar</button>
          <button type="submit" class="btn btn-primary">Guardar</button>
        </div>
    </form>
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>

  <!-- /.content -->



</div>
@endsection
