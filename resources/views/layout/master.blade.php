<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ReadTheBooks</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{asset('template/plugins/fontawesome-free/css/all.min.css')}}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{asset('template/dist/css/adminlte.min.css')}}">
    @stack('style')
</head>

<body class="hold-transition sidebar-mini">
    <!-- Site wrapper -->
    <div class="wrapper">
        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light fixed-top">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
            </li>          
            </ul>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4 float-left">
            <!-- Brand Logo -->
            <a href="/" class="brand-link ">
            <img src="{{asset('template/dist/img/AdminLTELogo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
            <span class="brand-text font-weight-light">ReadTheBook</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="info">
                        <a href="#" class="d-block">Admin</a>
                    </div>
                </div>

                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                    <!-- Add icons to the links using the .nav-icon class
                        with font-awesome or any other icon font library -->
                    <li class="nav-item">
                        <a href="/admin" class="nav-link">
                        <i class="nav-icon fas fa-home"></i>
                        <p>
                            Home
                        </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="/admin/create" class="nav-link">
                        <i class="nav-icon fas fa-book"></i>
                        <p>
                            Tambah Buku 
                        </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="/admin/genre" class="nav-link">
                        <i class="nav-icon fas fa-user-secret"></i>
                        <p>
                            Genre 
                        </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="/admin/author" class="nav-link">
                        <i class="nav-icon fas fa-feather-alt"></i>
                        <p>
                            Author 
                        </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{route('auth.logout')}}" class="nav-link">
                        <i class="nav-icon fas fa-sign-out-alt"></i>
                        <p>
                            Logout
                        </p>
                        </a>
                    </li>
                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>
        <!-- /.Main Sidebar Container -->

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>@yield('title')</h1>
                    </div>
                    </div>
                </div>
            </section>
            <!-- /.Content Header (Page header -->

            <!-- Main content -->
            <section class="content">
                <!-- card -->
                <div class="card">

                    <!-- card-body -->
                    <div class="card-body">
                        @yield('content')
                    </div>                  
                    <!-- /.card-body -->

                </div>
                <!-- /.card -->

            </section>
            <!-- /.content -->

        </div>
        <!-- /.content-wrapper -->

    <footer class="main-footer fixed-bottom">
        <div class="float-right d-none d-sm-block">
        <b>Created By</b> Fitria
        </div>
        <strong>ReadTheBook</strong> For All Book Lovers
    </footer>

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->

    <!-- jQuery -->
    <script src="{{asset('template/plugins/jquery/jquery.min.js')}}"></script>
    <!-- Bootstrap 4 -->
    <script src="{{asset('template/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <!-- AdminLTE App -->
    <script src="{{asset('template/dist/js/adminlte.min.js')}}"></script>
    <!-- AdminLTE for demo purposes -->
    <!-- <script src="{{asset('template/dist/js/demo.js')}}"></script> -->

    @stack('script')
    </body>
</html>
