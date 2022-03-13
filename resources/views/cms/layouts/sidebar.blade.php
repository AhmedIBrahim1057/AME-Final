 <!-- Main Sidebar Container -->
 <aside class="main-sidebar sidebar-dark-primary elevation-4" style="background-color: #0e3253 !important">
    <!-- Brand Logo -->
    <a href="{{Route('cms.dashboard')}}" class="brand-link">
      <img src="{{asset('cmsFiles/dist/img/ame-logo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3 " style="opacity: .8;">
      <span class="brand-text font-weight-light" style="font-size: smaller">Arab Mechanical Engineer</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{asset('cmsFiles/dist/img/avatar.png')}}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">{{ Auth::user()->name }}</a>
        </div>
      </div>


      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item">
            <a href="{{ route('cms.projects.index') }}" class="nav-link">
              <i class="nav-icon fas fa-tasks"></i>
              <p>
                Projects
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('cms.products.index') }}" class="nav-link">
              <i class="nav-icon fas fa-luggage-cart"></i>
              <p>
                Products
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('cms.clients.index') }}" class="nav-link">
              <i class="nav-icon fas fa-users"></i>
              <p>
                Clients
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('cms.partners.index') }}" class="nav-link">
              <i class="nav-icon fas fa-handshake"></i>
              <p>
                Partners
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('cms.events.index') }}" class="nav-link">
              <i class="nav-icon fas fa-calendar-alt"></i>
              <p>
                Events
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('cms.news.index') }}" class="nav-link">
              <i class="nav-icon fas fa-newspaper"></i>
              <p>
                News
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('frm-logout').submit();" class="nav-link">
              <i class="nav-icon fas fa-sign-out-alt"></i>
              <p>
                Logout
              </p>
            </a>
            <form id="frm-logout" action="{{ route('logout') }}" method="POST" style="display: none;">
              {{ csrf_field() }}
            </form>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
      
    </div>
    <!-- /.sidebar -->
  </aside>