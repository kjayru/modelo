@csrf
<div class="box-body">
        

    <div class="form-group">
        <label for="name" class="col-sm-2 control-label">Nombre</label>

        <div class="col-sm-10">
            <input type="text" name="name" class="form-control" id="name" value="{{ @$scort->name }}" placeholder="Nombre">
        </div>
    </div>

    <div class="form-group">
        <label for="email" class="col-sm-2 control-label">E-mail</label>

        <div class="col-sm-10">
            <input type="text" name="email" class="form-control" id="email" value="{{ @$scort->user->email }}" placeholder="E-mail">
          
        </div>
    </div>

    <div class="form-group">
        <label for="password" class="col-sm-2 control-label">Clave</label>

        <div class="col-sm-10">
            <input type="password" name="password" class="form-control" id="password" value="" placeholder="Clave">
        </div>
    </div>
    
    <hr>


    <div class="form-group">
        <label for="package" class="col-sm-2 control-label">Paquete</label>

        <div class="col-sm-10">
            <select name="package_id" class="form-control" id="package">
                <option value="">Seleccione</option>
                @foreach($paquetes as $paquete)
                <option value="{{$paquete->id}}"  {{ ($scort->id == $paquete->id) ? 'selected' : '' }}>{{$paquete->name}}</option>
                @endforeach
            </select>
        </div>
    </div>

    <div class="form-group">
        <label for="region" class="col-sm-2 control-label" >Departamento</label>

        <div class="col-sm-10">
            <select name="region_id" class="form-control" id="region">
                <option value="">Seleccione</option>
                @foreach($regions as $region)
                    <option value="{{$region->id}}"  {{ ($scort->id == $region->id) ? 'selected' : '' }}>{{$region->name}}</option>
                @endforeach
            </select>
        </div>
    </div>

    <div class="form-group">
            <label for="telefono" class="col-sm-2 control-label">Teléfono</label>

        <div class="col-sm-10">
            <input type="text" name="telefono" class="form-control" id="telefono" value="{{ @$scort->telefono }}" placeholder="Teléfono">
        </div>
    </div>


    <div class="form-group">
            <label for="nacionalidad" class="col-sm-2 control-label">Nacionalidad</label>

        <div class="col-sm-10">
            <input type="text" name="nacionalidad" class="form-control" id="nacionalidad" value="{{ @$scort->nacionalidad }}" placeholder="Nacionalidad">
        </div>
    </div>

    <div class="form-group">
            <label for="etnia" class="col-sm-2 control-label">Etnia</label>

        <div class="col-sm-10">
            <input type="text" name="etnia" class="form-control" id="etnia" value="{{ @$scort->etnia }}" placeholder="Etnia">
        </div>
    </div>

    <div class="form-group">
            <label for="edad" class="col-sm-2 control-label">Edad</label>

        <div class="col-sm-10">
            <input type="number" max="60" name="edad" class="form-control" id="edad" value="{{ @$scort->edad }}" placeholder="Edad">
        </div>
    </div>

    <div class="form-group">
            <label for="talla" class="col-sm-2 control-label">Talla</label>

        <div class="col-sm-10">
            <input type="text" name="talla" class="form-control" id="talla" value="{{ @$scort->talla }}" placeholder="Talla">
        </div>
    </div>

    <div class="form-group">
            <label for="peso" class="col-sm-2 control-label">Peso</label>

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
            <label for="descripcion" class="col-sm-2 control-label">Descripción</label>

        <div class="col-sm-10">
            <textarea name="description" class="form-control" id="description">{{ @$scort->description }}</textarea>
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

</div>
<!-- /.box-body -->
<div class="box-footer">

    <button type="submit" class="btn btn-info pull-right">Guardar</button>
</div>
