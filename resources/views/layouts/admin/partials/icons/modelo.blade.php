<div class="pull-left image">
    
    @if(!empty(@$foto_profile))
        <img src="/storage/{{@$foto_profile}}" class="img-circle">
    @else
    <img src="/backend/dist/img/user3-128x128.jpg" class="img-circle" alt="User Image">
    @endif
  </div>