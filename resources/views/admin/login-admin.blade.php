<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login - Panel Admin</title>

    <link rel="stylesheet" href="{{ asset('halaman/master/master.styles.css') }}">
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('fontawesome/css/all.css') }}">
    <link rel="stylesheet" href="{{ asset('halaman/login-admin/login-admin.styles.css') }}">
</head>

<body>
    <div class="col-6 login-box box">
        <div class="card">
            <div class="card-body login-card-body">
                <p class="login-box-msg">Login</p>
                @if ($errors->any())
                <div class="alert alert-danger text-sm">
                    <ul style="padding: 0 !important">
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
                @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                @endif
                <form action="{{ route('login') }}" method="POST">
                    @csrf
                    <div class="input-group mb-3">
                        <input name="email" type="email" class="form-control" placeholder="Email">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-envelope"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input name="password" type="password" class="form-control" placeholder="Password">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-8">
                            <div class="icheck-primary">
                                <input type="checkbox" id="remember">
                                <label for="remember">
                                    Remember Me
                                </label>
                            </div>
                        </div>
                        <div class="col-4">
                            <button type="submit" class="btn btn-primary btn-block">Masuk</button>
                        </div>
                    </div>
                </form>
                <p class="mb-1">
                    <a href="forgot-password.html" data-toggle="modal" data-target="#modal-lupa-password">Lupa
                        Password</a>
                </p>
                <p class="mb-0">
                    <a id="register" href="#" class="text-center" data-toggle="modal"
                        data-target="#modal-daftar">Daftar</a>
                </p>
            </div>
        </div>
    </div>

    {{-- Modal-Daftar Start --}}
    <div class="modal fade" id="modal-daftar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Daftar Admin</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="register-box">
                        <form action="{{ route('register') }}" method="POST">
                            @csrf
                            <div class="input-group mb-3">
                                <input name="namalengkap" type="text" class="form-control" placeholder="Full name">
                                <div class="input-group-append">
                                    <div class="input-group-text">
                                        <span class="fas fa-user"></span>
                                    </div>
                                </div>
                                @error('namalengkap')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="input-group mb-3">
                                <input name="username" type="text" class="form-control" placeholder="Username">
                                <div class="input-group-append">
                                    <div class="input-group-text">
                                        <span class="fas fa-id-badge"></span>
                                    </div>
                                </div>
                                @error('username')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="input-group mb-3">
                                <input name="email" type="email" class="form-control" placeholder="Email">
                                <div class="input-group-append">
                                    <div class="input-group-text">
                                        <span class="fas fa-envelope"></span>
                                    </div>
                                </div>
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="input-group mb-3">
                                <input name="password" type="password" class="form-control" placeholder="Password">
                                <div class="input-group-append">
                                    <div class="input-group-text">
                                        <span class="fas fa-lock"></span>
                                    </div>
                                </div>
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="input-group mb-3">
                                <input name="password_confirmation" type="password" class="form-control"
                                    placeholder="Retype password">
                                <div class="input-group-append">
                                    <div class="input-group-text">
                                        <span class="fas fa-lock"></span>
                                    </div>
                                </div>
                                @error('namalengkap')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="row">
                                <!-- /.col -->
                                <div class="col-4">
                                    <button type="submit" class="btn btn-primary btn-block">Register</button>
                                </div>
                                <!-- /.col -->
                            </div>
                        </form>
                    </div>
                </div> <!-- /.form-box -->
            </div><!-- /.card -->
        </div>
    </div>
    {{-- Modal-Daftar End --}}

    {{-- Modal Lupa Password Start --}}
    <div class="modal fade" id="modal-lupa-password" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Lupa Password Atuh...</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="register-box">
                        <form action="{{ route('password.email') }}" method="POST">
                            @csrf
                            <p class="mb-3"> Kamu Lupa Password? Silahkan Masukkan E-mail dibawah.... </p>
                            <div class="input-group mb-3">
                                <input name="email" type="email" class="form-control" placeholder="Email">
                                <div class="input-group-append">
                                    <div class="input-group-text">
                                        <span class="fas fa-envelope"></span>
                                    </div>
                                </div>
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                    </div>
                </div>
                <div class="col-6 mb-2">
                    <button type="submit" class="btn btn-primary">Request Password Baru</button>
                </div>
                </form>
            </div>
        </div>
    </div>
    {{-- Modal Lupa Password End --}}


</body>
<script src="{{ asset('jquery-3.5.1.js') }}"></script>
<script src="{{ asset('fontawesome/js/all.js') }}"></script>
<script src="{{ asset('bootstrap/js/bootstrap.bundle.js') }}"></script>
<script src="{{ asset('popper.min.js') }}"></script>
<script src="{{ asset('bootstrap/js/bootstrap.js') }}"></script>

</html>