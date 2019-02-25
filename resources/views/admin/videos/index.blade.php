@extends('layouts.admin.master')
@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
      Videos
  </h1>
  <ol class="breadcrumb">
      <li><a href="/admin"><i class="fa fa-dashboard"></i> Dashboard</a></li>
      <li class="active">Video</li>
      
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
<div class="col-md-12 ">

<!-- Default box -->
<div class="box">
<div class="box-header with-border">
  <h3 class="box-title">REGISTROS</h3>

  <div class="box-tools pull-right">
    <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
      <i class="fa fa-minus"></i></button>
    <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
      <i class="fa fa-times"></i></button>
  </div>
          </div>
          @if ($errors->any())
                  <div class="alert alert-danger">
                      <ul>
                          @foreach ($errors->all() as $error)
                              <li>{{ $error }}</li>
                          @endforeach
                      </ul>
                  </div>
              @endif
          <div class="box-body">
            <form id="sel-model">
              <div class="form-group col-md-4">
                  <select class="form-control" name="scortslist" id="scortslist">
                    <option value="">Seleccione Scort</option>
                    @foreach($scorts as $scort)
                      <option value="{{ $scort->id }}"> {{ $scort->name }} - {{ $scort->region->name }}</option>
                    @endforeach
                  </select>
              </div>
            </form>   
          
            @can('galleries.create')
            <form method="POST" action="{{route('videos.create')}}" id="fr-video-crear">
              @csrf
              <input type="hidden" name="_method" value="GET">
              <input type="hidden" name="scort_id" value="2" id="scort_id">
            <button type="submit" class="btn btn-primary pull-right" >Crear</button>
            </form>
            @endcan

              <table class="table table-striped table-hover" id="tb-role">
                  <thead>
                      <th width="10">ID</th>
                      <th>Path</th>
                      
                      <th></th>

                  </thead>
                  <tbody>
                      @foreach($videos as $key => $vid)
                          <tr>
                              <td>{{$key+1}}</td>
                              <td>
                                <video width="200" controls>
                                <source src="/{{ $vid->path }}" type="video/mp4">
                                </video>
                              </td>
                              <td></td>
                              <td></td>


                             
                              <td width="10">
                                      @can('videos.destroy')
                                      <a href="#" data-id="{{$vid->id}}" data-toggle="modal" data-target="#deluser" class="btn btn-danger btn-role-delete">Borrar</a>
                                      @endcan
                              </td>
                          </tr>
                      @endforeach
                  </tbody>
              </table>

</div>
<!-- /.box-body -->
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
