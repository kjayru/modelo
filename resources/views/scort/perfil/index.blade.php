@extends('layouts.admin.master')
@section('content')
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
  @if ($errors->any())
  <div class="alert alert-danger">
      <ul>
          @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
          @endforeach
      </ul>
  </div>
@endif      
  <section class="content"> 
    <div class="container-fluid spark-screen">
    <div class="row">
    <div class="col-md-12">
  
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
            <div class="box-body">
                  <div class="col-md-12">
                      <form class="form-horizontal" action="{{ route('profiles.update',@$scort->id)}}" method="POST" enctype="multipart/form-data">
                        @method('PUT')
                        @csrf
                          <input type="hidden" name="scort_id" value="{{ @$scort->id}}">

                          <div class="box-body">

                                <div class="form-group">
                                        <label for="name" class="col-sm-2 control-label" >Foto panel</label>
  
                                    <div class="col-sm-10">
                                            <input type="file" accept="image/png, image/jpeg" name="fotopanel" class="form-control preimage" id="photos" value="{{ @$scort->cover  }}" placeholder="Cover" multiple required>
                                            
                                            <div class="preview col-sm-10 col-sm-offset-2">
                                                @if(!empty(@$scort->cover))
                                                    <img src="/storage/{{@$scort->cover}}" width="100">
                                                @else
                                                    <img src="" width="100">
                                                @endif
                                            </div>
                                    </div>
                                    
                                </div>

                                

                              <div class="form-group">
                                      <label for="name" class="col-sm-2 control-label" >Región</label>

                                  <div class="col-sm-10">
                                  
                                      <select name="region_id" class="form-control" id="region">
                                          <option value="">Seleccione</option>
                                          @foreach($regions as $region)
                                            <option value="{{ $region->id}}" @if($region->id == $scort->region_id) selected @endif>{{$region->name}}</option>
                                          @endforeach
                                      </select>
                                  </div>
                              </div>

                              <div class="form-group">                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                              
                                  <label for="name" class="col-sm-2 control-label" >Nombre</label>

                                  <div class="col-sm-10">
                                      <input type="text" name="name" class="form-control" id="name" value="{{ @$scort->name }}" placeholder="Nombre">
                                  </div>
                              </div>

                              <div class="form-group">
                                  <label for="telefono" class="col-sm-2 control-label" >Teléfono</label>

                                <div class="col-sm-10">
                                    <input type="text" name="telefono" class="form-control" id="telefono" value="{{ @$scort->telefono }}" placeholder="Teléfono">
                                </div>
                              
                              </div>

                              <div class="form-group">
                                  <label for="nacionalidad" class="col-sm-2 control-label" >Nacionalidad</label>

                                  <div class="col-sm-10">
                                      <input type="text" name="nacionalidad" class="form-control" id="nacionalidad" value="{{ @$scort->nacionalidad }}" placeholder="Nacionalidad">
                                  </div>
                              </div>


                              <div class="form-group">
                                  <label for="etnia" class="col-sm-2 control-label" >Etnia</label>

                                  <div class="col-sm-10">
                                      <input type="text" name="etnia" class="form-control" id="etnia" value="{{ @$scort->etnia }}" placeholder="Etnia">
                                  </div>
                              </div>

                              <div class="form-group">
                                  <label for="edad" class="col-sm-2 control-label" >Edad</label>

                                  <div class="col-sm-10">
                                      <input type="text" name="edad" class="form-control" id="edad" value="{{ @$scort->edad }}" placeholder="Edad">
                                  </div>
                              </div>

                              <div class="form-group">
                                  <label for="talla" class="col-sm-2 control-label" >Estatura</label>

                                  <div class="col-sm-10">
                                      <input type="text" name="talla" class="form-control" id="talla" value="{{ @$scort->talla }}" placeholder="Estatura">
                                  </div>
                              </div>

                              <div class="form-group">
                                  <label for="peso" class="col-sm-2 control-label" >Peso</label>

                                  <div class="col-sm-10">
                                      <input type="text" name="peso" class="form-control" id="peso" value="{{ @$scort->peso }}" placeholder="Peso">
                                  </div>
                              </div>

                              <div class="form-group">
                                  <label for="medidas" class="col-sm-2 control-label" >Medidas</label>

                                  <div class="col-sm-10">
                                      <input type="text" name="medidas" class="form-control" id="medidas" value="{{ @$scort->medidas }}" placeholder="Medidas">
                                  </div>
                              </div>


                              <div class="form-group">
                                      <label for="descripcion" class="col-sm-2 control-label" >Descripción</label>

                                  <div class="col-sm-10">
                                      <textarea name="description" class="form-control" id="description">{{ @$scort->description }}</textarea>
                                  </div>
                              </div>
                            

                              <div class="form-group">
                                    <label for="descripcion" class="col-sm-2 control-label">Entrevista</label>
                        
                                <div class="col-sm-10">
                                        <div class="checkbox">
                                            <input type="checkbox" name="entrevista" id="entrevista" value="2" @if(@$scort->entrevista==2) checked @endif>
                                        </div>
                                </div>
                            </div>
                        
                            <div class="form-group">
                                    <label for="descripcion" class="col-sm-2 control-label">Estacionamiento</label>
                        
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="estacionamiento" id="estacionamiento" value="{{ @$scort->estacionamiento }}">
                                </div>
                            </div>
                        
                            <div class="form-group">
                                    <label for="descripcion" class="col-sm-2 control-label">Experiencias</label>
                        
                                <div class="col-sm-10">
                                        <input type="text"  class="form-control" name="experencia" id="experiencia" value="{{ @$scort->experiencia }}">
                                        <small>Ingrese el numero de experiencias </small>
                                </div>
                            </div>
                        
                            <div class="form-group">
                                    <label for="status" class="col-sm-2 control-label">Estado</label>
                        
                                <div class="col-sm-10">
                                    <div class="checkbox">
                                    <input type="checkbox"  name="status" id="status" value="2" @if(@$scort->status==2) checked @endif>
                                    <small>Disponible </small>
                                    </div>
                                </div>
                            </div>


                          </div>
                    <hr>
                    <h3>Servicios</h3>
                    <div class="form-group">
                            <label for="nombre" class="col-sm-1 control-label" ></label>
                            <div class="col-sm-10">
                                <ul class="list-unstyled">
                    
                                    @foreach($services as $k => $service)
                                        <li>
                                              <label for="">
                                                <input type="checkbox" name="services[]" value="{{ $service->id }}" rel=" {{ @$scort->services[$k]->id }}" @if(@in_array($service->id ,$sv)) checked @endif>
                                                {{$service->name}}
                                                <em>({{ $service->description ?:  'N/A' }})</em>
                                            </label>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                    </div>
                    <hr>
                    <h3>Caracteristicas</h3>

                    <div class="form-group">
                            <label for="nombre" class="col-sm-1 control-label" ></label>
                            <div class="col-sm-10">
                                <ul class="list-unstyled">
                    
                                    @foreach($caracteristicas as $k => $car)
                                        <li>
                                            <label for="">
                                                <input type="checkbox" name="characteristics[]" value="{{ $car->id }}" rel=" {{ @$scort->characteristics[$k]->id }}" @if(@in_array($car->id ,$cr)) checked @endif>
                                                {{$car->name}}
                                                <em>({{ $car->description ?:  'N/A' }})</em>
                                            </label>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                    </div>  



                    <h3>Horario</h3>
   
                    <div class="form-group">
                            <label for="nombre" class="col-sm-1 control-label" ></label>
                            <div class="col-sm-10">
                                <ul class="list-unstyled listhorario">
                
                                    
                                <!--/lunes-->
                                        <li class="hlist">
                                            <label for="">
                                                <input type="checkbox" name="schedule_id[]" value="{{ $horarios[0]->id }}" rel=" {{ @$scort->schedulescorts[0]->id }}" @if(@in_array($horarios[0]->id ,$sc)) checked @endif>
                                                {{$horarios[0]->name}}
                                                
                                            </label>
                                            @if(@in_array($horarios[0]->id ,$sc))
                                            @php  $valor = \App\ScheduleScort::valores(1);
                                            @endphp
                                            <input type="text" class="form-control" name="inicio[]" value="{{ @$valor['inicio'] }}" placeholder="Inicio" >
                                            <input type="text" class="form-control" name="final[]" value="{{ @$valor['final'] }}" placeholder="Final" >
                                            @else
                                            <input type="text" class="form-control" name="inicio[]" value="" placeholder="Inicio" >
                                            <input type="text" class="form-control" name="final[]" value="" placeholder="Final" >
                                            @endif
                                        </li>
                                <!--/martes-->
                                        <li class="hlist">
                                            <label for="">
                                                <input type="checkbox" name="schedule_id[]" value="{{ $horarios[1]->id }}" rel=" {{ @$scort->schedulescorts[1]->id }}" @if(@in_array($horarios[1]->id ,$sc)) checked @endif>
                                                {{$horarios[1]->name}}
                                                
                                            </label>
                                            @if(@in_array($horarios[1]->id ,$sc))
                                            @php  $valor = \App\ScheduleScort::valores(2);
                                            @endphp
                                            <input type="text" class="form-control" name="inicio[]" value="{{ @$valor['inicio'] }}" placeholder="Inicio" >
                                            <input type="text" class="form-control" name="final[]" value="{{ @$valor['final'] }}" placeholder="Final" >
                                            @else
                                            <input type="text" class="form-control" name="inicio[]" value="" placeholder="Inicio" >
                                            <input type="text" class="form-control" name="final[]" value="" placeholder="Final" >
                                            @endif
                                        </li>
                                <!--/miercoles-->
                                        <li class="hlist">
                                            <label for="">
                                                <input type="checkbox" name="schedule_id[]" value="{{ $horarios[2]->id }}" rel=" {{ @$scort->schedulescorts[2]->id }}" @if(@in_array($horarios[2]->id ,$sc)) checked @endif>
                                                {{$horarios[2]->name}}
                                                
                                            </label>
                
                                            @if(@in_array($horarios[2]->id ,$sc))
                
                                            @php  $valor = \App\ScheduleScort::valores(3);
                                            @endphp
                
                                            <input type="text" class="form-control" name="inicio[]" value="{{ @$valor['inicio'] }}" placeholder="Inicio" >
                                            <input type="text" class="form-control" name="final[]" value="{{ @$valor['final'] }}" placeholder="Final" >
                                            @else
                                            <input type="text" class="form-control" name="inicio[]" value="" placeholder="Inicio" >
                                            <input type="text" class="form-control" name="final[]" value="" placeholder="Final" >
                                            @endif
                                        
                                        </li>
                                <!--/jueves-->
                                        <li class="hlist">
                                            <label for="">
                                                <input type="checkbox" name="schedule_id[]" value="{{ $horarios[3]->id }}" rel=" {{ @$scort->schedulescorts[3]->id }}" @if(@in_array($horarios[3]->id ,$sc)) checked @endif>
                                                {{$horarios[3]->name}}
                                                
                                            </label>
                                            @if(@in_array($horarios[3]->id ,$sc))
                                            @php  $valor = \App\ScheduleScort::valores(4);
                                            @endphp
                                            
                                            <input type="text" class="form-control" name="inicio[]" value="{{ @$valor['inicio'] }}" placeholder="Inicio" >
                                            <input type="text" class="form-control" name="final[]" value="{{ @$valor['final'] }}" placeholder="Final" >
                                            @else
                                            <input type="text" class="form-control" name="inicio[]" value="" placeholder="Inicio" >
                                            <input type="text" class="form-control" name="final[]" value="" placeholder="Final" >
                                            @endif
                                        </li>
                                <!--/viernes-->
                                        <li class="hlist">
                                            <label for="">
                                                <input type="checkbox" name="schedule_id[]" value="{{ $horarios[4]->id }}" rel=" {{ @$scort->schedulescorts[4]->id }}" @if(@in_array($horarios[4]->id ,$sc)) checked @endif>
                                                {{$horarios[4]->name}}
                                                
                                            </label>
                                            @if(@in_array($horarios[4]->id ,$sc))
                                            @php  $valor = \App\ScheduleScort::valores(5);
                                            @endphp
                                            <input type="text" class="form-control" name="inicio[]" value="{{ @$valor['inicio'] }}" placeholder="Inicio" >
                                            <input type="text" class="form-control" name="final[]" value="{{ @$valor['final'] }}" placeholder="Final" >
                                            @else
                                            <input type="text" class="form-control" name="inicio[]" value="" placeholder="Inicio" >
                                            <input type="text" class="form-control" name="final[]" value="" placeholder="Final" >
                                            @endif
                                        </li>
                                <!--/sabado-->
                                        <li class="hlist">
                                            <label for="">
                                                <input type="checkbox" name="schedule_id[]" value="{{ $horarios[5]->id }}" rel=" {{ @$scort->schedulescorts[5]->id }}" @if(@in_array($horarios[5]->id ,$sc)) checked @endif>
                                                {{$horarios[5]->name}}
                                                
                                            </label>
                                            
                                            @if(@in_array($horarios[5]->id ,$sc))
                                            @php  $valor = \App\ScheduleScort::valores(6);
                                            @endphp
                                            
                                            
                                            <input type="text" class="form-control" name="inicio[]" value="{{ @$valor['inicio'] }}" placeholder="Inicio" >
                                            <input type="text" class="form-control" name="final[]" value="{{ @$valor['final'] }}" placeholder="Final" >
                                            @else
                                            
                                            <input type="text" class="form-control" name="inicio[]" value="" placeholder="Inicio" >
                                            <input type="text" class="form-control" name="final[]" value="" placeholder="Final" >
                                            @endif
                                        </li>
                                <!--/domingo-->
                
                                        <li class="hlist">
                                            <label for="">
                                                <input type="checkbox" name="schedule_id[]" value="{{ $horarios[6]->id }}" rel=" {{ @$scort->schedulescorts[6]->id }}" @if(@in_array($horarios[6]->id ,$sc)) checked @endif>
                                                {{$horarios[6]->name}}
                                                
                                            </label>
                                        
                                            @if(@in_array($horarios[6]->id ,$sc))
                                        
                                            
                                            @php  $valor = \App\ScheduleScort::valores(7);
                                            @endphp
                                            <input type="text" class="form-control" name="inicio[]" value="{{ @$valor['inicio'] }}" placeholder="Inicio" >
                                            <input type="text" class="form-control" name="final[]" value="{{ @$valor['final'] }}" placeholder="Final" >
                                            @else
                                            
                                            <input type="text" class="form-control" name="inicio[]" value="" placeholder="Inicio" >
                                            <input type="text" class="form-control" name="final[]" value="" placeholder="Final" >
                                            @endif
                                        </li>
                                
                                </ul>
                            </div>
                    </div>
                
                    <h3>Filtros</h3>
                
                    <div class="form-group">
                            <label for="nombre" class="col-sm-1 control-label" ></label>
                            <div class="col-sm-10">
                                <ul class="list-unstyled">
                    
                                    @foreach($filters as $k => $fil)
                                        <li>
                                            <label for="">
                                                <input type="checkbox" name="filters[]" value="{{ $fil->id }}" rel=" {{ @$scort->filters[$k]->id }}" @if(@in_array($fil->id ,$fl)) checked @endif>
                                               @if($fil->name=='video')
                                                Con video
                                               @elseif($fil->name=='cara')
                                                Cara visible
                                                @elseif($fil->name=='experiencia')
                                                Con experiencia
                                                @elseif($fil->name=='disponible')
                                                Disponible
                                                @elseif($fil->name=='promocion')
                                                En promoción
                                                @endif
                                            </label>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                    </div>

                    
                          <!-- /.box-body -->
                          <div class="box-footer">

                              <button type="submit" class="btn btn-info pull-right">Guardar</button>
                          </div>
                     </form>
                    
                  </div> 
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
  @endsection