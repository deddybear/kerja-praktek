<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title')</title>

    {{-- CSS --}}
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('fontawesome/css/all.css') }}">
    @yield('css')

   

</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-success">
        <div class="container-fluid">
            <a class="navbar-brand" href="/">SD DIPONEGORO</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
                aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="/about">Profile Sekolah</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                            data-bs-toggle="dropdown" aria-expanded="true">
                            Informasi Akademik
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <li><a class="dropdown-item" href="#">Pendaftaran Siswa Baru</a></li>
                            <li><a class="dropdown-item" href="#">Pengumuman PPDB</a></li>
                            <li><a class="dropdown-item" href="#">Struktur Organisasi</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/register">Fasilitas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/hai">Gallery</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    {{-- ISI KONTEN --}}
    @yield('content')
</body>
     {{-- Script --}}
     <script src="{{ asset('jquery-3.5.1.js') }}"></script>
     <script src="{{ asset('bootstrap/js/bootstrap.bundle.min.js') }}"></script>
     <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"
         integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous">
     </script>
     <script src="{{ asset('bootstrap/js/bootstrap.min.js') }}"></script>
     <script src="{{ asset('fontawesome/js/all.js') }}"></script>
     @yield('script')
</html>