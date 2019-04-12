
<li class="dropdown user user-menu">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">

        <img src="/backend/dist/img/user2-160x160.jpg" class="user-image" alt="User Image">

          <span class="hidden-xs">{{ \Auth::user()->name }}</span>
        </a>
        <ul class="dropdown-menu">
          <li class="user-header">
            <img src="/backend/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
            <p>
              {{ \Auth::user()->name }} - Administrador
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