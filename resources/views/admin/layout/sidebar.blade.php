<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="/admin/avatars/{{Auth::user()->Adminimage}}" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>{{ Auth::user()->name}}</p>
          @if(Auth::user()->isOnline())
                                <li class="text-success">Online</li>
                                @else
                                <li class="text-muted">Offline</li>
                                @endif
          <!---<a href="#"><i class="fa fa-circle text-success"></i> Online</a> -->
        </div>
      </div>
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
      <li class=""><a href="{{route('post.index')}}"><i class="fa fa-circle-o"></i> Posts</a></li>
      @can ('posts.category', Auth::user())
      <li><a href="{{route('category.index')}}"><i class="fa fa-circle-o"></i> Categories</a></li>
      @endcan
      @can('posts.user', Auth::user())
      <li class=""><a href="{{route('user.index')}}"><i class="fa fa-circle-o"></i> Users</a></li>
      @endcan
      @can('posts.role', Auth::user())
      <li class=""><a href="{{route('role.index')}}"><i class="fa fa-circle-o"></i> Roles</a></li>
      @endcan
      @can('posts.permission', Auth::user())
      <li class=""><a href="{{route('permission.index')}}"><i class="fa fa-circle-o"></i> Permissions</a></li>
      @endcan
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>
