<aside class="main-sidebar">
    <section class="sidebar">
      <div class="user-panel">
        

        @include('layouts.admin.partials.icons.'.\App\User::navigation())


        <div class="pull-left info">
          <p>{{ \Auth::user()->name }}</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <ul class="sidebar-menu" data-widget="tree">    
        @include('layouts.admin.partials.navigations.'.\App\User::navigation())
      </ul>
    </section>
  </aside>
