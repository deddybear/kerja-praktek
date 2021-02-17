<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title')</title>

    {{-- CSS --}}
    <link rel="stylesheet" href="{{ asset('fontawesome/css/all.css') }}">
    <link rel="stylesheet" href="{{ asset('adminlte/css/adminlte.css') }}">
    @yield('css')
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">
        {{-- Navbar --}}
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
        <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
            </li>
          </ul>
    </nav>
    {{-- End Navbar --}}

    {{-- Main Sidebar Container --}}
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <a href="/dashboard" class="brand-link">
            <span class="brand-text font-weight-light">Panel Admin</span>
        </a>

        <div class="sidebar">
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                    <li class="nav-item has-treeview menu-open">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-bed"></i>
                            <p>
                                Artikel Sekolah
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="/dashboard/artikel-sekolah" class="nav-link">
                                  <i class="far fa-circle nav-icon"></i>
                                  <p>Artikel Sekolah</p>
                                </a>
                              </li>
                              <li class="nav-item">
                                <a href="#" class="nav-link">
                                  <i class="far fa-circle nav-icon"></i>
                                  <p>Artikel Siswa</p>
                                </a>
                              </li>
                              <li class="nav-item">
                                <a href="#" class="nav-link">
                                  <i class="far fa-circle nav-icon"></i>
                                  <p>Artikel Guru</p>
                                </a>
                              </li>
                        </ul>
                    </li>
                    
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-bed"></i>
                            <p>
                                PPDB
                            </p>
                        </a>
                    </li>
                    <li class="nav-item has-treeview menu-open">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-bed"></i>
                            <p>
                                Akun
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                  <i class="far fa-circle nav-icon"></i>
                                  <p>Edit Akun</p>
                                </a>
                              </li>
                              <li class="nav-item">
                                <a href="{{ route('password.request') }}" class="nav-link">
                                  <i class="far fa-circle nav-icon"></i>
                                  <p>Reset Password</p>
                                </a>
                              </li>
                              <li class="nav-item">
                                <a href="{{ route('logout') }}" class="nav-link" onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                                    <i class="fas fa-sign-out-alt nav-icon"></i>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                  <p>Logout</p>
                                </a>
                              </li>
                        </ul>
                    </li>
                </ul>
            </nav>
        </div>
    </aside>

    <div class="content-wrapper">
        <div class="content-header">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark"> @yield('content-title')</h1>
                </div>
            </div>
        </div>

        <section class="content">
            <div class="container-fluid">
               @yield('content')
            </div>
        </section>

    </div>
</div>


</body>
<script src="{{ asset('jquery-3.5.1.js') }}"></script>
<script src="{{ asset('fontawesome/js/all.js') }}"></script>
<script src="{{ asset('adminlte/js/adminlte.js') }}"></script>
@yield('script')
</html>