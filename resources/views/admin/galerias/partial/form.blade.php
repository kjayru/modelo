    @csrf
    <div class="box-body">
        
       
                <label for="photo" class="col-sm-2 control-label" >Cargar fotos</label>
        <div class="col-sm-10">
             <input type="file" accept="image/png, image/jpeg" name="photos[]" class="form-control preimages" id="photos" value="{{ @$catalog->covergit  }}" placeholder="Cover" multiple required>
             <small id="photolabel" class="form-text text-muted">Seleccione multiples imagenes.</small>
        </div>
        <div class="preview col-sm-10 col-sm-offset-2">
                <img src="" width="100">
        </div>

       

    </div>
    <!-- /.box-body -->
    <div class="box-footer">

        <button type="submit" class="btn btn-info pull-right">Guardar</button>
    </div>
