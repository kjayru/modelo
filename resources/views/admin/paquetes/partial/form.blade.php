
    @csrf
    <div class="box-body">
        <div class="form-group">
                <label for="name" class="col-sm-2 control-label" >Nombre</label>

            <div class="col-sm-10">
                <input type="text" name="name" class="form-control" id="name" value="{{ @$paquete->name }}" placeholder="Nombre">
            </div>
        </div>


        <div class="form-group">
                <label for="descripcion" class="col-sm-2 control-label" >Descripción</label>

            <div class="col-sm-10">
                <textarea name="description" class="form-control" id="description">{{ @$paquete->description }}</textarea>
            </div>
        </div>

    </div>
    <!-- /.box-body -->
    <div class="box-footer">

        <button type="submit" class="btn btn-info pull-right">Guardar</button>
    </div>
