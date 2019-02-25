@csrf
<div class="box-body">
    
    <div class="form-group">
        <label for="photo" class="col-sm-2 control-label" >Carga Video 1</label>
        <div class="col-sm-10">
            <input type="file" accept="video/*" name="video[]" class="form-control preimages" id="video1" value="{{ @$video->path  }}" placeholder="Cover"  required>
            <small id="photolabel" class="form-text text-muted">El formato para el video debe ser mp4.</small>
        </div>
    </div>
    @if($paquete == 1)
    <div class="form-group">
        <label for="photo" class="col-sm-2 control-label" >Carga Video 2</label>
        <div class="col-sm-10">
            <input type="file" accept="video/*" name="video[]" class="form-control preimages" id="video2" value="" placeholder="Cover" >
            <small id="photolabel" class="form-text text-muted">El formato para el video debe ser mp4.</small>
    </div>
    </div>
    <div class="form-group">
        <label for="photo" class="col-sm-2 control-label" >Carga Video 3</label>
        <div class="col-sm-10">
            <input type="file" accept="video/*" name="video[]" class="form-control preimages" id="video3" value="" placeholder="Cover"  >
            <small id="photolabel" class="form-text text-muted">El formato para el video debe ser mp4.</small>
        </div>
    </div>
    <div class="form-group">
        <label for="photo" class="col-sm-2 control-label" >Carga Video 4</label>
        <div class="col-sm-10">
            <input type="file" accept="video/*" name="video[]" class="form-control preimages" id="video4" value="" placeholder="Cover"  >
            <small id="photolabel" class="form-text text-muted">El formato para el video debe ser mp4.</small>
        </div>
    </div>
    <div class="form-group">
        <label for="photo" class="col-sm-2 control-label" >Carga Video 5</label>
        <div class="col-sm-10">
            <input type="file" accept="video/*" name="video[]" class="form-control preimages" id="video5" value="" placeholder="Cover" >
            <small id="photolabel" class="form-text text-muted">El formato para el video debe ser mp4.</small>
        </div>
    </div>
    @endif
</div>
<!-- /.box-body -->
<div class="box-footer">

    <button type="submit" class="btn btn-info pull-right">Guardar</button>
</div>
