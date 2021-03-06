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
      <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-aqua">
          <div class="inner">
            <h3>{{ $total }}</h3>
            <p>Registros</p>
          </div>
          <div class="icon">
            <i class="ion ion-person"></i>
          </div>
          <a href="/admin/scorts" class="small-box-footer">Mas<i class="fa fa-arrow-circle-right"></i></a>
        </div>
      </div>    
    </div>

  </section>
  <!-- /.content -->
@endsection
