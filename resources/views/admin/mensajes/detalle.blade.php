@extends('layouts.admin.master')
@section('content')
 
    <section class="content-header">
            <h1>
            Mensajes
            <small>Mensajes recibidos</small>
            </h1>
            <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Inicio</a></li>
            <li><a href="/admin/messages">Mensajes</a></li>
            <li class="active">Detalle</li>
            </ol>
    </section>
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
      <!-- Main content -->
      <section class="content">
       
        <!-- row -->
        <div class="row">
          <div class="col-md-12">

            <!-- The time line -->
            <ul class="timeline">
              <!-- timeline time label -->
           @foreach($conversation->messages as $mensaje)
                <li class="time-label">
                      <span class="bg-green">
                       {{ $mensaje->created_at }}
                      </span>
                </li>
                <!-- /.timeline-label -->
                <!-- timeline item -->
                <li>
                  <i class="fa fa-envelope bg-blue"></i>
      
                  <div class="timeline-item">
                    <span class="time"><i class="fa fa-clock-o"></i> {{ $mensaje->created_at }}</span>
      
                    <h3 class="timeline-header"><a href="#">{{ $mensaje->user->name }}</a> Envio un mensaje</h3>
      
                    <div class="timeline-body">
                      {{ $mensaje->body }}
                    </div>
                    <div class="timeline-footer">
                      <a class="btn btn-primary btn-xs">Responder</a>
                    
                    </div>
                  </div>
                </li>
              <!-- END timeline item -->
              <!-- timeline item -->
            @endforeach
              
            </ul>
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
    
       
        <!-- /.row -->
    
      </section>
@endsection