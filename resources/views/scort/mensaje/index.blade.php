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
        <div class="box box-warning">
          <div class="box-header with-border">
            <h3 class="box-title">Enviar Mensaje al Administrador</h3>
          </div>
          <!-- /.box-header -->
          <form role="form" action="{{ route('mensajes.store')}}" method="POST">
            @csrf
          <div class="box-body">
            <div class="col-md-7">
             
                <!-- text input -->
                <div class="form-group">
                  <label>Asunto</label>
                  <input type="text" name="asunto" class="form-control" placeholder="Enter ...">
                </div>
                

                <!-- textarea -->
                <div class="form-group">
                  <label>Mensaje</label>
                  <textarea class="form-control" name="mensaje" rows="10" placeholder="Enter ..."></textarea>
                </div>
  
                <input type="hidden" name="scort_id" value="{{ \Auth::user()->scort->id }}">
             
            </div>
          </div>
          <div class="box-footer">
              <button type="submit" class="btn btn-primary">Enviar Mensaje</button>
          </div>
        </form>
          <!-- /.box-body -->
        </div>
      </div>    
    </div>

  </section>
  <!-- /.content -->
@endsection
