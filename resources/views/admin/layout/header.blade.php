<header class="main-header">
    <!-- Logo -->
    <a href="index2.html" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>D</b></span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>DODODESIGN</b></span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" style="position: relative; padding-left: 50px;">
              <img src="/admin/avatars/{{Auth::user()->Adminimage}}" style="width: 32px; height: 32px; position: absolute; top: 10px; left: 10px; border-radius: 50px;">
              <span class="hidden-xs">{{ Auth::user()->name}}</span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="/admin/avatars/{{Auth::user()->Adminimage}}" class="img-circle" alt="User Image">

                <p>
                  {{ Auth::user()->name}} - {{ Auth::user()->description }}
                  <small>Member since {{ Auth::user()->created_at->toFormattedDateString() }}</small>
                </p>
              </li>
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="{{route('admin.profile')}}" class="btn btn-default btn-flat">Profile</a>
                </div>
                <div class="pull-right btn btn-default">
                  <a href="{{route('logout')}}" 
                  onclick="event.preventDefault(); document.getElementById('logout-form').submit();" 
                  >Logout</a>
                  <form id="logout-form" action="{{ route('logout')}}" method="POST" style="display: none;">
                    {{ csrf_field() }}
                  </form>
                </div>
              </li>
            </ul>
          </li>
        </ul>
      </div>
    </nav>
  </header>
