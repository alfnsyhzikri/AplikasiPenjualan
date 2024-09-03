<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>@yield('Judul')</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset('../../css/fontawesome-free/css/all.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('../../css/adminlte.min.css')}}">
  <link rel="stylesheet" href="{{ asset('../../css/dataTables.bootstrap4.min.css')}}"> 
  

</head>

<body class="hold-transition sidebar-mini">

    <!-- Site wrapper -->
    <div class="wrapper">

        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">

            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>

                {{-- <li class="nav-item d-none d-sm-inline-block">
                    <a href="/" class="nav-link"><strong>SMAN 12 BANDA ACEH</strong></a>
                </li> --}}
            </ul>

            <!-- Right navbar links -->
            {{-- <ul class="navbar-nav ml-auto">
              <button class="Btn">
  
                <div class="sign"><svg viewBox="0 0 512 512"><path d="M377.9 105.9L500.7 228.7c7.2 7.2 11.3 17.1 11.3 27.3s-4.1 20.1-11.3 27.3L377.9 406.1c-6.4 6.4-15 9.9-24 9.9c-18.7 0-33.9-15.2-33.9-33.9l0-62.1-128 0c-17.7 0-32-14.3-32-32l0-64c0-17.7 14.3-32 32-32l128 0 0-62.1c0-18.7 15.2-33.9 33.9-33.9c9 0 17.6 3.6 24 9.9zM160 96L96 96c-17.7 0-32 14.3-32 32l0 256c0 17.7 14.3 32 32 32l64 0c17.7 0 32 14.3 32 32s-14.3 32-32 32l-64 0c-53 0-96-43-96-96L0 128C0 75 43 32 96 32l64 0c17.7 0 32 14.3 32 32s-14.3 32-32 32z"></path></svg></div>
                
                <div class="text">Logout</div>
              </button>
            
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="{{ route('logout') }}" class="nav-link" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                        Logout
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </li>
            </ul> --}}
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Sidebar -->
            <div class="sidebar" style="position: fixed;">
                <!-- Sidebar user (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img src="{{ asset('imgs/user1.jpg')}}" class="img-circle elevation-2" alt="User Image">
                    </div>
                    {{-- <div class="info">
                        <a href="/admin" class="d-block">
                            {{ Auth::user()->nm_siswa }}
                            ( {{ Auth::user()->level }} )
                        </a>
                    </div> --}}
                </div>

                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

                      {{-- <li class="nav-item">
                        <a href="#" class="nav-link">
                          <i class="nav-icon fas fa-users"></i>
                          <p>
                            Master Data
                            <i class="right fas fa-angle-left"></i>
                          </p>
                        </a>
                        
                        <ul class="nav nav-treeview">
                          <li class="nav-item">
                            <a href="/data_user" class="nav-link">
                              <i class="far fa-circle nav-icon"></i>
                              <p>Data Siswa</p>
                            </a>
                          </li>
                          <li class="nav-item">
                            <a href="/data_user_lulus" class="nav-link">
                              <i class="far fa-circle nav-icon"></i>
                              <p>Data Siswa Lulus</p>
                            </a>
                          </li>
                          <li class="nav-item">
                            <a href="/data_user_tidak_lulus" class="nav-link">
                              <i class="far fa-circle nav-icon"></i>
                              <p>Data Siswa Tidak Lulus</p>
                            </a>
                          </li>
                        </ul>
                      </li> --}}
                      
                        <li class="nav-item">
                            <a href="/produk" class="nav-link">
                              <i class="nav-icon fas fa-solid fa-shop"></i>
                              <p>
                                Produk
                              </p>
                            </a>
                        </li>



                    </ul>
                </nav>
            </div>
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <section class="content-header">
            </section>

            <!-- Start Konten -->

            @yield('Konten')

            <!-- End Konten -->

        </div>
        <!-- End content-wrapper -->

    </div>
    <!-- End wrapper -->

<!-- jQuery -->
<script src="{{ asset('../../plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap 4 -->
<script src="{{ asset('../../js/bootstrap.bundle.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('../../js/adminlte.min.js')}}"></script>

<!-- Core JS -->
<script src="{{ asset('js/core/bootstrap.js')}}"></script>


</body>
</html>