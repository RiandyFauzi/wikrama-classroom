<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>Wikrama Classroom</title>

  <!-- General CSS Files -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

  <!-- CSS Libraries -->
  <link rel="stylesheet" href="{{ asset('template/node_modules/jqvmap/dist/jqvmap.min.css') }}">
  <link rel="stylesheet" href="{{ asset('template/node_modules/summernote/dist/summernote-bs4.css') }}">
  <link rel="stylesheet" href="{{ asset('template/node_modules/owl.carousel/dist/assets/owl.carousel.min.css') }}">
  <link rel="stylesheet" href="{{ asset('template/node_modules/owl.carousel/dist/assets/owl.theme.default.min.css') }}">

  <!-- Template CSS -->
  <link rel="stylesheet" href="{{ asset('template/assets/css/style.css') }}">
  <link rel="stylesheet" href="{{ asset('template/assets/css/components.css') }}">
</head>

<body>
  <div id="app">
    <div class="main-wrapper">
      <div class="navbar-bg"></div>
      <nav class="navbar navbar-expand-lg main-navbar">
        <form class="form-inline mr-auto">
          <ul class="navbar-nav mr-3">
            <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fas fa-bars"></i></a></li>
            <li><a href="#" data-toggle="search" class="nav-link nav-link-lg d-sm-none"><i class="fas fa-search"></i></a></li>
          </ul>
          <div class="search-element">
            <input class="form-control" type="search" placeholder="Search" aria-label="Search" data-width="250">
            <button class="btn" type="submit"><i class="fas fa-search"></i></button>
            <div class="search-backdrop"></div>
            <div class="search-result">
              <div class="search-header">
                Histories
              </div>
              <div class="search-item">
                <a href="#">How to hack NASA using CSS</a>
                <a href="#" class="search-close"><i class="fas fa-times"></i></a>
              </div>
              <div class="search-item">
                <a href="#">Kodinger.com</a>
                <a href="#" class="search-close"><i class="fas fa-times"></i></a>
              </div>
              <div class="search-item">
                <a href="#">#Stisla</a>
                <a href="#" class="search-close"><i class="fas fa-times"></i></a>
              </div>
              <div class="search-header">
                Result
              </div>
              <div class="search-item">
                <a href="#">
                  <img class="mr-3 rounded" width="30" src="{{ asset('template/assets/img/products/product-3-50.png') }}" alt="product">
                  oPhone S9 Limited Edition
                </a>
              </div>
              <div class="search-item">
                <a href="#">
                  <img class="mr-3 rounded" width="30" src="{{ asset('template/assets/img/products/product-2-50.png') }}" alt="product">
                  Drone X2 New Gen-7
                </a>
              </div>
              <div class="search-item">
                <a href="#">
                  <img class="mr-3 rounded" width="30" src="{{ asset('template/assets/img/products/product-1-50.png') }}" alt="product">
                  Headphone Blitz
                </a>
              </div>
              <div class="search-header">
                Projects
              </div>
              <div class="search-item">
                <a href="#">
                  <div class="search-icon bg-danger text-white mr-3">
                    <i class="fas fa-code"></i>
                  </div>
                  Stisla Admin Template
                </a>
              </div>
              <div class="search-item">
                <a href="#">
                  <div class="search-icon bg-primary text-white mr-3">
                    <i class="fas fa-laptop"></i>
                  </div>
                  Create a new Homepage Design
                </a>
              </div>
            </div>
          </div>
        </form>
        <ul class="navbar-nav navbar-right">
          <li class="dropdown dropdown-list-toggle"><a href="#" data-toggle="dropdown" class="nav-link nav-link-lg message-toggle beep"><i class="far fa-envelope"></i></a>
            <div class="dropdown-menu dropdown-list dropdown-menu-right">
              <div class="dropdown-header">Messages
                <div class="float-right">
                  <a href="#">Mark All As Read</a>
                </div>
              </div>
              <div class="dropdown-list-content dropdown-list-message">
                <a href="#" class="dropdown-item dropdown-item-unread">
                  <div class="dropdown-item-avatar">
                    <img alt="image" src="{{ asset('template/assets/img/avatar/avatar-1.png') }}" class="rounded-circle">
                    <div class="is-online"></div>
                  </div>
                  <div class="dropdown-item-desc">
                    <b>Kusnaedi</b>
                    <p>Hello, Bro!</p>
                    <div class="time">10 Hours Ago</div>
                  </div>
                </a>
                <a href="#" class="dropdown-item dropdown-item-unread">
                  <div class="dropdown-item-avatar">
                    <img alt="image" src="{{ asset('template/assets/img/avatar/avatar-2.png') }}" class="rounded-circle">
                  </div>
                  <div class="dropdown-item-desc">
                    <b>Dedik Sugiharto</b>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
                    <div class="time">12 Hours Ago</div>
                  </div>
                </a>
                <a href="#" class="dropdown-item dropdown-item-unread">
                  <div class="dropdown-item-avatar">
                    <img alt="image" src="{{ asset('template/assets/img/avatar/avatar-3.png') }}" class="rounded-circle">
                    <div class="is-online"></div>
                  </div>
                  <div class="dropdown-item-desc">
                    <b>Agung Ardiansyah</b>
                    <p>Sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                    <div class="time">12 Hours Ago</div>
                  </div>
                </a>
                <a href="#" class="dropdown-item">
                  <div class="dropdown-item-avatar">
                    <img alt="image" src="{{ asset('template/assets/img/avatar/avatar-4.png') }}" class="rounded-circle">
                  </div>
                  <div class="dropdown-item-desc">
                    <b>Ardian Rahardiansyah</b>
                    <p>Duis aute irure dolor in reprehenderit in voluptate velit ess</p>
                    <div class="time">16 Hours Ago</div>
                  </div>
                </a>
                <a href="#" class="dropdown-item">
                  <div class="dropdown-item-avatar">
                    <img alt="image" src="{{ asset('template/assets/img/avatar/avatar-5.png') }}" class="rounded-circle">
                  </div>
                  <div class="dropdown-item-desc">
                    <b>Alfa Zulkarnain</b>
                    <p>Exercitation ullamco laboris nisi ut aliquip ex ea commodo</p>
                    <div class="time">Yesterday</div>
                  </div>
                </a>
              </div>
              <div class="dropdown-footer text-center">
                <a href="#">View All <i class="fas fa-chevron-right"></i></a>
              </div>
            </div>
          </li>
          <li class="dropdown dropdown-list-toggle"><a href="#" data-toggle="dropdown" class="nav-link notification-toggle nav-link-lg beep"><i class="far fa-bell"></i></a>
            <div class="dropdown-menu dropdown-list dropdown-menu-right">
              <div class="dropdown-header">Notifications
                <div class="float-right">
                  <a href="#">Mark All As Read</a>
                </div>
              </div>
              <div class="dropdown-list-content dropdown-list-icons">
                <a href="#" class="dropdown-item dropdown-item-unread">
                  <div class="dropdown-item-icon bg-primary text-white">
                    <i class="fas fa-code"></i>
                  </div>
                  <div class="dropdown-item-desc">
                    Template update is available now!
                    <div class="time text-primary">2 Min Ago</div>
                  </div>
                </a>
                <a href="#" class="dropdown-item">
                  <div class="dropdown-item-icon bg-info text-white">
                    <i class="far fa-user"></i>
                  </div>
                  <div class="dropdown-item-desc">
                    <b>You</b> and <b>Dedik Sugiharto</b> are now friends
                    <div class="time">10 Hours Ago</div>
                  </div>
                </a>
                <a href="#" class="dropdown-item">
                  <div class="dropdown-item-icon bg-success text-white">
                    <i class="fas fa-check"></i>
                  </div>
                  <div class="dropdown-item-desc">
                    <b>Kusnaedi</b> has moved task <b>Fix bug header</b> to <b>Done</b>
                    <div class="time">12 Hours Ago</div>
                  </div>
                </a>
                <a href="#" class="dropdown-item">
                  <div class="dropdown-item-icon bg-danger text-white">
                    <i class="fas fa-exclamation-triangle"></i>
                  </div>
                  <div class="dropdown-item-desc">
                    Low disk space. Let's clean it!
                    <div class="time">17 Hours Ago</div>
                  </div>
                </a>
                <a href="#" class="dropdown-item">
                  <div class="dropdown-item-icon bg-info text-white">
                    <i class="fas fa-bell"></i>
                  </div>
                  <div class="dropdown-item-desc">
                    Welcome to Stisla template!
                    <div class="time">Yesterday</div>
                  </div>
                </a>
              </div>
              <div class="dropdown-footer text-center">
                <a href="#">View All <i class="fas fa-chevron-right"></i></a>
              </div>
            </div>
          </li>
          <li class="dropdown"><a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
              <img alt="image" src="{{ asset('template/assets/img/avatar/avatar-1.png') }}" class="rounded-circle mr-1">
              <div class="d-sm-none d-lg-inline-block">{{Auth::user()->name}}</div>
            </a>
            <div class="dropdown-menu dropdown-menu-right">
             

              <a class="dropdown-item has-icon text-danger" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                <i class="fas fa-sign-out-alt"></i> {{ __('Logout') }}
              </a>

              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
              </form>


              </a>
            </div>
          </li>
        </ul>
      </nav>
      <div class="main-sidebar">
        <aside id="sidebar-wrapper">
          <div class="sidebar-brand">
            <a href="/home"><img class="" width="220" src="{{ asset('img/wc2.png') }}"></i></a>
          </div>
          <div class="sidebar-brand sidebar-brand-sm">
            <a href="/home">WC</a>
          </div>


          <!-- homw -->

          <ul class="sidebar-menu">
              <li class="menu-header">Dashboard</li>
              <li class="dropdown">
                <a href="#" class="nav-link has-dropdown"><i class="far fa-file-alt"></i> <span>Dashboard</span></a>
                <ul class="dropdown-menu">
                  <li><a class="nav-link" href="/home">Home</a></li>
                    </ul>
              </li>
             

            <!-- Form Siswa -->

            @if(auth()->user()->level == 'siswa')
            <ul class="sidebar-menu">
              <li class="menu-header">Siswa</li>
              <li class="dropdown">
                <a href="#" class="nav-link has-dropdown"><i class="far fa-file-alt"></i> <span>Kelas</span></a>
                <ul class="dropdown-menu">
                  <li><a class="nav-link" href="{{ route('tugas.dashboard',[auth()->user()->rombel]) }}">{{ auth()->user()->rombel }}</a></li>
                  <li><a class="nav-link" href="{{ route('tugas.dashboard',[auth()->user()->rayon]) }}">{{ auth()->user()->rayon }}</a></li>
                </ul>
              </li>
              @endif


              <!-- Input Tugas -->

              @if(auth()->user()->level == 'guru')
              <ul class="sidebar-menu">
                <li class="menu-header">Input</li>
                <li class="nav-item dropdown">
                  <a href="#" class="nav-link has-dropdown"><i class="far fa-file-alt"></i><span>Data Tugas</span></a>
                  <ul class="dropdown-menu">
                    <li><a class="nav-link" href="/materi">Input Materi</a></li>
                   
                  </ul>
                  
                </li>
                <li class="nav-item dropdown">
                  <a href="#" class="nav-link has-dropdown"><i class="far fa-file-alt"></i><span>Data Siswa</span></a>
                  <ul class="dropdown-menu">
                     <li><a class="nav-link" href="/regis">Register Siswa</a></li>
                  </ul>
                  
                </li>

                <!-- Kelas All -->


                <ul class="sidebar-menu">
                  <li class="menu-header">Kelas All</li>
                  <li class="nav-item dropdown">

                  <li class="dropdown">
                    <a href="#" class="nav-link has-dropdown"><img class="" width="27" src="{{ asset('img/rpl1.jpg') }}" style="margin-left: 1px;"><span style="margin-left: 15px;">RPL</span></a>
                    <ul class="dropdown-menu">

                      <li><a class="nav-link" href="{{ route('tugas.rombel','RPL X-1')}}">RPL X-1</a></li>
                      <li><a class="nav-link" href="{{ route('tugas.rombel','RPL X-2')}}">RPL X-2</a></li>
                      <li><a class="nav-link" href="{{ route('tugas.rombel','RPL X-3')}}">RPL X-3</a></li>
                      <li><a class="nav-link" href="{{ route('tugas.rombel','RPL X-4')}}">RPL X-4</a></li>
                      <li><a class="nav-link" href="{{ route('tugas.rombel','RPL XI-1')}}">RPL XI-1</a></li>
                      <li><a class="nav-link" href="{{ route('tugas.rombel','RPL XI-2')}}">RPL XI-2</a></li>
                      <li><a class="nav-link" href="{{ route('tugas.rombel','RPL XI-3')}}">RPL XI-3</a></li>
                      <li><a class="nav-link" href="{{ route('tugas.rombel','RPL XI-4')}}">RPL XI-4</a></li>
                      <li><a class="nav-link" href="{{ route('tugas.rombel','RPL XII-1')}}">RPL XII-1</a></li>
                      <li><a class="nav-link" href="{{ route('tugas.rombel','RPL XII-2')}}">RPL XII-2</a></li>
                      <li><a class="nav-link" href="{{ route('tugas.rombel','RPL XII-3')}}">RPL XII-3</a></li>
                      <li><a class="nav-link" href="{{ route('tugas.rombel','RPL XII-4')}}">RPL XII-4</a></li>
                    </ul>
                  </li>
                  <li class="dropdown">
                    <a href="#" class="nav-link has-dropdown"><img class="" width="27" src="{{ asset('img/tkj2.jpg') }}" style="margin-left: 1px;"><span style="margin-left: 15px;"><span>TKJ</span></a>
                    <ul class="dropdown-menu">
                      <li><a class="nav-link" href="{{ route('tugas.rombel','TKJ X-1')}}">TKJ X-1</a></li>
                      <li><a class="nav-link" href="{{ route('tugas.rombel','TKJ X-2')}}">TKJ X-2</a></li>
                      <li><a class="nav-link" href="{{ route('tugas.rombel','TKJ X-3')}}">TKJ X-3</a></li>
                      <li><a class="nav-link" href="{{ route('tugas.rombel','TKJ X-4')}}">TKJ X-4</a></li>
                      <li><a class="nav-link" href="{{ route('tugas.rombel','TKJ XI-1')}}">TKJ XI-1</a></li>
                      <li><a class="nav-link" href="{{ route('tugas.rombel','TKJ XI-2')}}">TKJ XI-2</a></li>
                      <li><a class="nav-link" href="{{ route('tugas.rombel','TKJ XI-3')}}">TKJ XI-3</a></li>
                      <li><a class="nav-link" href="{{ route('tugas.rombel','TKJ XI-4')}}">TKJ XI-4</a></li>
                      <li><a class="nav-link" href="{{ route('tugas.rombel','TKJ XII-1')}}">TKJ XII-1</a></li>
                      <li><a class="nav-link" href="{{ route('tugas.rombel','TKJ XII-2')}}">TKJ XII-2</a></li>
                      <li><a class="nav-link" href="{{ route('tugas.rombel','TKJ XII-3')}}">TKJ XII-3</a></li>
                      <li><a class="nav-link" href="{{ route('tugas.rombel','TKJ XII-4')}}">TKJ XII-4</a></li>

                    </ul>
                  </li>
                  <li class="dropdown">
                    <a href="#" class="nav-link has-dropdown"><img class="" width="27" src="{{ asset('img/bdp.png') }}" style="margin-left: 1px;"><span style="margin-left: 15px;"><span>BDP</span></a>
                    <ul class="dropdown-menu">
                      <li><a class="nav-link" href="{{ route('tugas.rombel','TKJ X-1')}}">BDP X-1</a></li>
                      <li><a class="nav-link" href="{{ route('tugas.rombel','TKJ X-2')}}">BDP X-2</a></li>
                      <li><a class="nav-link" href="{{ route('tugas.rombel','TKJ X-3')}}">BDP X-3</a></li>
                      <li><a class="nav-link" href="{{ route('tugas.rombel','TKJ X-4')}}">BDP X-4</a></li>
                      <li><a class="nav-link" href="{{ route('tugas.rombel','TKJ XI-1')}}">BDP XI-1</a></li>
                      <li><a class="nav-link" href="{{ route('tugas.rombel','TKJ XI-2')}}">BDP XI-2</a></li>
                      <li><a class="nav-link" href="{{ route('tugas.rombel','TKJ XI-3')}}">BDP XI-3</a></li>
                      <li><a class="nav-link" href="{{ route('tugas.rombel','TKJ XI-4')}}">BDP XI-4</a></li>
                      <li><a class="nav-link" href="{{ route('tugas.rombel','TKJ XII-1')}}">BDP XII-1</a></li>
                      <li><a class="nav-link" href="{{ route('tugas.rombel','TKJ XII-2')}}">BDP XII-2</a></li>
                      <li><a class="nav-link" href="{{ route('tugas.rombel','TKJ XII-3')}}">BDP XII-3</a></li>
                      <li><a class="nav-link" href="{{ route('tugas.rombel','TKJ XII-4')}}">BDP XII-4</a></li>

                    </ul>
                  </li>
                  </li>
                  @endif










        </aside>
      </div>

      <!-- Main Content -->
  
        @yield("content")
 
      <footer class="main-footer">
        <div class="footer-left">
          Copyright &copy; 2020 <div class="bullet">
            <div class="footer-right">

            </div>
      </footer>
    </div>
  </div>

  <!-- General JS Scripts -->
  <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
  <script src="{{ asset('template/assets/js/stisla.js') }}"></script>

  <!-- JS Libraies -->
  <script src="{{ asset('template/node_modules/jquery-sparkline/jquery.sparkline.min.js') }}"></script>
  <script src="{{ asset('template/node_modules/chart.js/dist/Chart.min.js') }}"></script>
  <script src="{{ asset('template/node_modules/owl.carousel/dist/owl.carousel.min.js') }}"></script>
  <script src="{{ asset('template/node_modules/summernote/dist/summernote-bs4.js') }}"></script>
  <script src="{{ asset('template/node_modules/chocolat/dist/js/jquery.chocolat.min.js') }}"></script>

  <!-- Template JS File -->
  <script src="{{ asset('template/assets/js/scripts.js') }}"></script>
  <script src="{{ asset('template/assets/js/custom.js') }}"></script>

  <!-- Page Specific JS File -->
  <script src="{{ asset('template/assets/js/page/index.js') }}"></script>
</body>

</html>