
<li class="dropdown user user-menu">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">

         
          @if(!empty(@$foto_profile))
            <img src="/storage/{{@$foto_profile}}" class="img-image" alt="User Image">
          @else
            <img src="/backend/dist/img/user3-128x128.jpg" class="img-image" alt="User Image">
          @endif  

          <span class="hidden-xs">{{ \Auth::user()->name }}</span>
        </a>
        <ul class="dropdown-menu">
          <li class="user-header">
                @if(!empty(@$foto_profile))
                <img src="/storage/{{@$foto_profile}}" class="img-circle" alt="User Image">
                @else
                <img src="/backend/dist/img/user3-128x128.jpg" class="img-circle" alt="User Image">
                @endif 
            <p>
              {{ \Auth::user()->name }} 
            </p>
          </li>
          <li class="user-footer">
            <div class="pull-left">
              <a href="#" class="btn btn-default btn-flat">{{ __('perfil') }}</a>
            </div>
            <div class="pull-right">
                  <a class="btn btn-default btn-flat" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                      {{ __('Logout') }}
                  </a>
                  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                      @csrf
                  </form>
            </div>
          </li>
        </ul>
</li>