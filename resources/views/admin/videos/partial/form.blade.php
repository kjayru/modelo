@csrf
<div class="box-body">
@if($scorts[0]->package_id == 2 && $contador<1)  
    <div class="form-group">
        <label for="photo" class="col-sm-2 control-label" >Carga Video 1</label>
        <div class="col-sm-10">
            <input type="file" accept="video/*" name="video[]" class="form-control preimages" id="video1" value="{{ @$video->path  }}" placeholder="Cover"  required>
            <small id="photolabel" class="form-text text-muted">El formato para el video debe ser mp4.</small>
        </div>
    </div>
@else
    <p>Usted llego a su limite de carga</p>
 @endif   
@if($scorts[0]->package_id == 1 & $contador<5)
  @for($i=0;$i<5-$contador;$i++)
    <div class="form-group">    
        <label for="photo" class="col-sm-2 control-label" >Carga Video {{ $i+1 }}</label>
        <div class="col-sm-10">
            <input type="file" accept="video/*" name="video[]" class="form-control preimages" id="video{{ $i+1 }}" value="{{ @$video->path  }}" placeholder="Cover" @if($i==0) required @endif>
            <small id="photolabel" class="form-text text-muted">El formato para el video debe ser mp4.</small>
        </div>
    </div>
@endfor

@endif
</div>
<!-- /.box-body -->
<div class="box-footer">

    <button type="submit" class="btn btn-info pull-right">Guardar</button>
</div>
