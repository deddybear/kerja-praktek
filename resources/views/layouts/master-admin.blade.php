<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title')</title>

    {{-- CSS --}}
    <link rel="stylesheet" href="{{ asset('plugin/fontawesome/css/all.css') }}">
    <link rel="stylesheet" href="{{ asset('plugin/adminlte/css/adminlte.css') }}">
    <link rel="stylesheet" href="{{ asset('halaman/master/master-admin.styles.css') }}">
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
            <ul class="navbar-nav ml-auto">
                <li class="nav-item d-none d-sm-inline-block">
                    <p class="nav-link m-0" > Selamat datang, {{ Auth::user()->nama }} </p>
                </li>
                {{-- <li class="nav-item dropdown">
                    <a class="nav-link" data-toggle="dropdown" href="#">
                        <i class="fas fa-th-large"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                        <a href="#" class="dropdown-item">
                            <p>asda</p>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <p>asda</p>
                        </a>
                    </div>
                </li> --}}
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
                    <ul class="nav nav-pills nav-sidebar flex-column nav-child-indent" data-widget="treeview"
                        role="menu" data-accordion="false">
                        <li class="nav-item">
                            <a href="/dashboard/panel-admin" class="nav-link">
                                <i class="nav-icon fas fa-home"></i>
                                <p>
                                    Menu Dashboard
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/" class="nav-link">
                                <i class="nav-icon fas fa-house-user"></i>
                                <p>
                                    Halaman Utama
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/dashboard/artikel-sekolah" class="nav-link">
                                <i class="nav-icon fas fa-scroll"></i>
                                <p>
                                    Master Artikel
                                </p>
                            </a>
                        </li>
                        <li class="nav-item has-tree">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-user-graduate"></i>
                                <p>
                                    PPDB
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                {{-- <li class="nav-item">
                                    <a href="/dashboard/pengumuman-ppdb" class="nav-link">
                                        <i class="far fa-bell nav-icon"></i>
                                        <p>Pengumuman PPDB</p>
                                    </a>
                                </li> --}}
                                <li class="nav-item">
                                    <a href="/dashboard/data-pendaftaran" class="nav-link">
                                        <i class="fas fa-clipboard-list nav-icon"></i>
                                        <p>Data Pendaftar</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item has-tree">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-images"></i>
                                <p>
                                    Galeri
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="/dashboard/galeri-foto" class="nav-link">
                                        <i class="fas fa-camera nav-icon"></i>
                                        <p>Galeri Foto</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="/dashboard/galeri-video" class="nav-link">
                                        <i class="fas fa-video nav-icon"></i>
                                        <p>Galeri Video</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item has-tree">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-school"></i>
                                <p>
                                    Data Sekolah
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                {{-- <li class="nav-item">
                                    <a href="/dashboard/data-siswa" class="nav-link">
                                        <i class="fas fa-user-graduate nav-icon"></i>
                                        <p>Data Siswa</p>
                                    </a>
                                </li> --}}
                                <li class="nav-item">
                                    <a href="/dashboard/data-pegawai" class="nav-link">
                                        <i class="fas fa-users nav-icon"></i>
                                        <p>Data Pegawai</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="/dashboard/profil-sekolah" class="nav-link">
                                        <i class="fas fa-id-badge nav-icon"></i>
                                        <p>Profil Sekolah</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item has-treeview">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-user"></i>
                                <p>
                                    Akun
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="/dashboard/edit-akun" class="nav-link">
                                        <i class="fas fa-user-edit nav-icon"></i>
                                        <p>Edit Akun</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('password.request') }}" class="nav-link">
                                        <i class="fas fa-wrench nav-icon"></i>
                                        <p>Reset Password</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('logout') }}" class="nav-link" onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                                        <i class="fas fa-sign-out-alt nav-icon"></i>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                            class="d-none">
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
                <div class="row m-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark"> @yield('content-title')</h1>
                        <div class="dropdown-divider @yield('warna-divider')"></div>
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
<script src="{{ asset('plugin/jquery-3.5.1.js') }}"></script>
<script src="{{ asset('plugin/moment-with-locales.js') }}"></script>
<script src="{{ asset('plugin/fontawesome/js/all.js') }}"></script>
<script src="{{ asset('plugin/bootstrap/js/bootstrap.bundle.js') }}"></script>
<script src="{{ asset('plugin/adminlte/js/adminlte.js') }}"></script>
@yield('script')

</html>