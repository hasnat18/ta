      <head>
          <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
          <!-- Font Awesome -->
          <link rel="stylesheet" href="{{url('public/assets/plugins/fontawesome-free/css/all.min.css')}}">
          <!-- overlayScrollbars -->
          <link rel="stylesheet" href="{{url('public/assets/plugins/overlayScrollbars/css/OverlayScrollbars.min.css')}}">
          <!-- Theme style -->
          <link rel="stylesheet" href="{{url('public/assets/dist/css/adminlte.css')}}">
          <!-- Favicon -->
          <link rel="shortcut icon" type="image/x-icon" href="http://localhost/tution_academy-main/assets/images/favicon.png">
          {{-- main js  --}}
          <script src="{{ url('public/assets/js/main.js') }}"></script> 
          {{-- Multi select --}}
          <script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
          <link rel="stylesheet" href="{{url('public/assets/plugins/multi-select-plugins/bootstrap.min.css')}}" type="text/css"/>
          <script type="text/javascript" src="{{url('public/assets/plugins/multi-select-plugins/jquery.min.js')}}"></script>
          <script type="text/javascript" src="{{url('public/assets/plugins/multi-select-plugins/bootstrap.min.js')}}"></script>
           {{-- Include the plugin's CSS and JS:  --}}
          <script type="text/javascript" src="{{url('public/assets/plugins/multi-select-plugins/select-multiple-selectdemo/js/mobiscroll.javascript.min.js')}}"></script>
          <link rel="stylesheet" href="{{url('public/assets/plugins/multi-select-plugins/select-multiple-selectdemo/css/mobiscroll.javascript.min.css')}}" type="text/css"/>
      </head>

      {{-- topnav --}}
      <nav class="main-header navbar navbar-expand navbar-white navbar-light">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
          </li>
          <li class="nav-item d-none d-sm-inline-block">
            <a href="../../index3.html" class="nav-link">Home</a>
          </li>
          <li class="nav-item d-none d-sm-inline-block">
            <a href="#" class="nav-link">Contact</a>
          </li>
        </ul>
    
        <!-- Right navbar links -->
        <ul class="navbar-nav ml-auto">
          <!-- Navbar Search -->
          <li class="nav-item">
            <a class="nav-link" data-widget="navbar-search" href="#" role="button">
              <i class="fas fa-search"></i>
            </a>
            <div class="navbar-search-block">
              <form class="form-inline">
                <div class="input-group input-group-sm">
                  <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
                  <div class="input-group-append">
                    <button class="btn btn-navbar" type="submit">
                      <i class="fas fa-search"></i>
                    </button>
                    <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                      <i class="fas fa-times"></i>
                    </button>
                  </div>
                </div>
              </form>
            </div>
          </li>
    
          <!-- Messages Dropdown Menu -->
          <li class="nav-item dropdown">
            <a class="nav-link" data-toggle="dropdown" href="#">
              <i class="far fa-comments"></i>
              <span class="badge badge-danger navbar-badge">3</span>
            </a>
            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
              <a href="#" class="dropdown-item">
                <!-- Message Start -->
                <div class="media">
                  <img src="../../dist/img/user1-128x128.jpg"  alt="User Avatar" class="img-size-50 mr-3 img-circle">
                  <div class="media-body">
                    <h3 class="dropdown-item-title">
                      Brad Diesel
                      <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                    </h3>
                    <p class="text-sm">Call me whenever you can...</p>
                    <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                  </div>
                </div>
                <!-- Message End -->
              </a>
              <div class="dropdown-divider"></div>
              <a href="#" class="dropdown-item">
                <!-- Message Start -->
                <div class="media">
                  <img src="../../dist/img/user8-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
                  <div class="media-body">
                    <h3 class="dropdown-item-title">
                      John Pierce
                      <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                    </h3>
                    <p class="text-sm">I got your message bro</p>
                    <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                  </div>
                </div>
                <!-- Message End -->
              </a>
              <div class="dropdown-divider"></div>
              <a href="#" class="dropdown-item">
                <!-- Message Start -->
                <div class="media">
                  <img src="../../dist/img/user3-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
                  <div class="media-body">
                    <h3 class="dropdown-item-title">
                      Nora Silvester
                      <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
                    </h3>
                    <p class="text-sm">The subject goes here</p>
                    <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                  </div>
                </div>
                <!-- Message End -->
              </a>
              <div class="dropdown-divider"></div>
              <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
            </div>
          </li>
          <!-- Notifications Dropdown Menu -->
          <li class="nav-item dropdown">
            <a class="nav-link" data-toggle="dropdown" href="#">
              <i class="far fa-bell"></i>
              <span class="badge badge-warning navbar-badge">15</span>
            </a>
            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
              <span class="dropdown-item dropdown-header">15 Notifications</span>
              <div class="dropdown-divider"></div>
              <a href="#" class="dropdown-item">
                <i class="fas fa-envelope mr-2"></i> 4 new messages
                <span class="float-right text-muted text-sm">3 mins</span>
              </a>
              <div class="dropdown-divider"></div>
              <a href="#" class="dropdown-item">
                <i class="fas fa-users mr-2"></i> 8 friend requests
                <span class="float-right text-muted text-sm">12 hours</span>
              </a>
              <div class="dropdown-divider"></div>
              <a href="#" class="dropdown-item">
                <i class="fas fa-file mr-2"></i> 3 new reports
                <span class="float-right text-muted text-sm">2 days</span>
              </a>
              <div class="dropdown-divider"></div>
              <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-widget="fullscreen" href="#" role="button">
              <i class="fas fa-expand-arrows-alt"></i>
            </a>
          </li>

          <ul class="navbar-nav ms-auto">
            <!-- Authentication Links -->
            @guest
                @if (Route::has('login'))
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                    </li>
                @endif

                @if (Route::has('register'))
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                    </li>
                @endif
            @else
                <li class="nav-item dropdown">
                  <a class="text-secondary mt-1 mx-3 dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    {{ Auth::user()->name }}
                  </a>

                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>
                </li>
            @endguest
        </ul>
{{-- 
        <div class="dropdown">
          <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            {{ Auth::user()->name }}
          </button>
          <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
            {{ Auth::user()->name }}
          </a>
          <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
            <a class="dropdown-item" href="{{ route('logout') }}"
            onclick="event.preventDefault();
                          document.getElementById('logout-form').submit();">
             {{ __('Logout') }}
         </a>

         <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
             @csrf
         </form>
          </div>
        </div> --}}

          {{-- <li class="nav-item">
            <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
              <i class="fas fa-th-large"></i>
            </a>
          </li> --}}
        </ul>
      </nav>
      
  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->


    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <a href="{{route('category.index')}}">
            <img src="{{url('\public/assets/img/logo.png')}}" class="img-circle elevation-2" alt="User Image">
          </a>
          
          {{-- <span class="h1 fw-bold mb-0"><img src="{{url('public/assets/img/logo.png')}}"alt="login form" class="img-fluid"  style="border-radius: 1rem 0 0 1rem;" /></span> --}}
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2" height="auto">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          {{-- <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="../../index.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Dashboard v1</p>
                </a>
              </li>
            </ul>
          </li> --}}
          <li class="nav-item"><a href="{{route('home')}}" class="nav-link"><i class="nav-icon fas fa-tachometer-alt"></i><p>Admin Dashboard<i class="right fas fa-angle-left"></i></p></a></li>
          <li class="nav-item"><a href="{{route('category.index')}}" class="nav-link"><i class="nav-icon fas fa-tachometer-alt"></i><p>Categories{{-- <i class="right fas fa-angle-left"></i> --}}</p></a></li>
          <li class="nav-item"><a href="{{route('levels.index')}}" class="nav-link"><i class="nav-icon fas fa-tachometer-alt"></i><p>Levels{{-- <i class="right fas fa-angle-left"></i> --}}</p></a></li>
          <li class="nav-item"><a href="{{route('cities.index')}}" class="nav-link"><i class="nav-icon fas fa-tachometer-alt"></i><p>Cities{{-- <i class="right fas fa-angle-left"></i> --}}</p></a></li>
          <li class="nav-item"><a href="{{route('classifieds.index')}}" class="nav-link"><i class="nav-icon fas fa-tachometer-alt"></i><p>Classifieds{{-- <i class="right fas fa-angle-left"></i> --}}</p></a></li>
          <li class="nav-item"><a href="{{route('locations.index')}}" class="nav-link"><i class="nav-icon fas fa-tachometer-alt"></i><p>Locations{{-- <i class="right fas fa-angle-left"></i> --}}</p></a></li>
          <li class="nav-item"><a href="{{route('subjects.index')}}" class="nav-link"><i class="nav-icon fas fa-tachometer-alt"></i><p>Subjects{{-- <i class="right fas fa-angle-left"></i> --}}</p></a></li>
          <li class="nav-item"><a href="{{route('modes.index')}}" class="nav-link"><i class="nav-icon fas fa-tachometer-alt"></i><p>Tuition Modes{{-- <i class="right fas fa-angle-left"></i> --}}</p></a></li>
          <li class="nav-item"><a href="{{route('students.index')}}" class="nav-link"><i class="nav-icon fas fa-tachometer-alt"></i><p>Students{{-- <i class="right fas fa-angle-left"></i> --}}</p></a></li>
          <li class="nav-item"><a href="{{route('notes.index')}}" class="nav-link"><i class="nav-icon fas fa-tachometer-alt"></i><p>Notes{{-- <i class="right fas fa-angle-left"></i> --}}</p></a></li>
          
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <main>
    <div class="content mt-5 mb-5 content-wrapper bg-white">

      @yield('main')
   
    </div>
  </main >

      <footer class="main-footer ">
        <div class="float-right d-none d-sm-block ">
          <b>Version</b> 3.2.0
        </div>
        <strong>Copyright &copy; 2014-2021.</strong> All rights reserved.
      </footer>


<script src="{{ url ('public/assets/plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap 4 -->
<script src="{{ url ('public/assets/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- overlayScrollbars -->
<script src="{{ url ('public/assets/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{ url ('public/assets/dist/js/adminlte.min.js')}}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{ url ('public/assets/dist/js/demo.js')}}"></script>
{{-- Multi select --}}
<script>
  $(document).ready(function(){
    
    var multipleCancelButton = new Choices('#choices-multiple-remove-button', {
       removeItemButton: true,
      //  maxItemCount:5,
       searchResultLimit:5,
      //  renderChoiceLimit:5
     }); 
    
    
});
</script>