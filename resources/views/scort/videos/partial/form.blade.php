@csrf
<div class="box-body">
    
@if($scorts->package_id == 2)  
    
    <p>Su paquete no permite cargar videos</p>
 @endif   
@if($scorts->package_id == 1 )
    
    @if($contador<1)
    <div class="form-group">    
        <label for="photo" class="col-sm-2 control-label" >Carga Video </label>
        <div class="col-sm-10">
            <input type="file" accept="video/*" name="video" class="form-control preimages" id="video1" value="{{ @$video->path  }}" placeholder="Cover"  required >
            <small id="photolabel" class="form-text text-muted">El formato para el video debe ser mp4.</small>
        </div>
    </div>
    @else
        <p>Llego al limite de carga de video</p>
    @endif
@endif
</div>
<!-- /.box-body -->
<div class="box-footer">
    @if($contador<1)
    <button type="submit" class="btn btn-info pull-right">Guardar</button>
    @endif
</div>
