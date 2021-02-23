@php
    $dataAkun = Auth::user();
@endphp

@extends('layouts/master-admin')

@section('title', 'Setting Akun')

@section('content-title', 'Setting Akun')

@section('warna-divider', 'costume-warna-border-dark')

@section('script')
    <script src="{{ asset('halaman/admin/edit-akun/edit-akun.js') }}"></script>
@endsection

@section('css')
<link rel="stylesheet" href="{{ asset('halaman/admin/edit-akun/edit-akun.styles.css') }}">
@endsection

@section('content')

<div class="container">
    <div class="mx-3">
        <ul class="list-group list-group-flush">
           @if ($dataAkun)
           <li class="list-group-item hover">
                <a href="javascript:;" id="panelNama" class="no-decoration">
                    <div class="row">
                        <div class="col-3">
                            <strong>Nama</strong>
                        </div>
                        <div class="col-8">
                            <span class="text_panelNama"> {{ $dataAkun->nama }} </span>
                            <div id="setting-nama" style="display: none">
                                <div class="col-8 p-0">
                                    <form action="" method="">
                                        <div class="form-group row">
                                            <label for="namaakun" class="col-sm-4 col-form-label col-form-label-sm py-2">Nama Lengkap</label>
                                            <div class="col-sm-8 py-2">
                                              <input type="text" class="form-control form-control-sm" name="nama_akun" placeholder="Nama Lengkap Asli Anda">
                                            </div>
                                        </div>
                                        <p class="alert alert-secondary" role="alert">
                                            bla bla bla
                                        </p>
                                        <div class="dropdown-divider"></div>
                                        <div class="row">
                                            <button type="button" id="cancelPanelNama" class="btn btn-sm btn-primary mr-1">Tutup</button>
                                            <button class="btn btn-xs btn-success ml-1" type="submit">Ubah Nama</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-1 text-right">
                            Edit
                        </div>
                    </div>
                </a>
            </li>
            <li class="list-group-item hover">
                <a href="javascript:;" id="panelUsername" class="no-decoration">
                    <div class="row">
                        <div class="col-3">
                            <strong>Username</strong>
                        </div>
                        <div class="col-8">
                            <span class="text_panelUsername"> {{ $dataAkun->username }} </span>
                            <div id="setting-username" style="display: none">
                                <div class="col-8 p-0">
                                    <form action="" method="">
                                        <div class="form-group row">
                                            <label for="username" class="col-sm-4 col-form-label col-form-label-sm">Username</label>
                                            <div class="col-sm-8 py-2">
                                              <input type="text" class="form-control form-control-sm" name="username" placeholder="Username Baru Anda">
                                            </div>
                                        </div>
                                        <div class="alert alert-secondary" role="alert">
                                           bla bla bla
                                        </div>
                                        <div class="dropdown-divider"></div>
                                        <div class="row">
                                            <button type="button" id="cancelUsername" class="btn btn-sm btn-primary mr-1">Tutup</button>
                                            <button class="btn btn-xs btn-success ml-1" type="submit">Ubah Nama</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-1 text-right">
                            Edit
                        </div>
                    </div>
                </a>
            </li>
            <li class="list-group-item hover">
                <a href="javascript:;" id="panelPassword" class="no-decoration">
                    <div class="row">
                        <div class="col-3">
                            <strong>Ganti Password</strong>
                        </div>
                        <div class="col-8">
                            <div id="setting-password" style="display: none">
                                <div class="col-8 p-0">
                                    <form action="" method="">
                                        <div class="form-group row">
                                            <label class="col-sm-4 col-form-label col-form-label-sm py-2">Password Baru</label>
                                            <div class="col-sm-8 py-2">
                                              <input type="password" class="form-control form-control-sm" name="password" placeholder="Password Baru">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-4 col-form-label col-form-label-sm py-2">Konfrimasi Password</label>
                                            <div class="col-sm-8 py-2">
                                              <input type="password" class="form-control form-control-sm" name="confrimasi_password" placeholder="Ulangi Password Baru">
                                            </div>
                                        </div>
                                        <p class="alert alert-secondary" role="alert">
                                           bla bla bla 
                                        </p>
                                        <div class="dropdown-divider"></div>
                                        <div class="row">
                                            <button type="button" id="cancelPanelPassword" class="btn btn-sm btn-primary mr-1">Tutup</button>
                                            <button class="btn btn-xs btn-success ml-1" type="submit">Ubah Nama</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-1 text-right">
                            Edit
                        </div>                       
                    </div>
                </a>
            </li>
            <li class="list-group-item hover">
                <a href="javascript:;" id="panelEmail" class="no-decoration">
                    <div class="row">
                        <div class="col-3">
                            <strong>Email</strong>
                        </div>
                        <div class="col-8">
                            <span class="text_panelEmail"> {{ $dataAkun->email }} </span>
                            <div id="setting-email" style="display: none">
                                <div class="col-8 p-0">
                                    <form action="" method="">
                                        <div class="form-group row">
                                            <label for="namaakun" class="col-sm-4 col-form-label col-form-label-sm py-2">Email Baru</label>
                                            <div class="col-sm-8 py-2">
                                              <input type="email" class="form-control form-control-sm" name="email" placeholder="Nama Lengkap Asli Anda">
                                            </div>
                                        </div>
                                        <p class="alert alert-secondary" role="alert">
                                            bla bla bla
                                        </p>
                                        <div class="dropdown-divider"></div>
                                        <div class="row">
                                            <button type="button" id="cancelPanelEmail" class="btn btn-sm btn-primary mr-1">Tutup</button>
                                            <button class="btn btn-xs btn-success ml-1" type="submit">Ubah Nama</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-1 text-right">
                            Edit
                        </div>
                    </div>
                </a>
            </li>
            <li class="list-group-item hover">
                <a href="#" class="no-decoration">
                    <div class="row">
                        <div class="col-3">
                            <strong>Tanggal Pendaftaran</strong>
                        </div>
                        <div class="col-9">
                            {{ $dataAkun->created_at }}
                        </div>
                       
                    </div>
                </a>
            </li>
            <li class="list-group-item hover">
                <a href="#" class="no-decoration">
                    <div class="row">
                        <div class="col-3">
                            <strong>Terakhir diperbarui</strong>
                        </div>
                        <div class="col-9">
                            {{ $dataAkun->updated_at }}
                        </div>
                    </div>
                </a>
            </li>
           @endif
        </ul>
    </div>
</div>
@endsection

{{-- 
    <li class="list-group-item hover">
                <a href="#" class="no-decoration">
                    <div >
                       
                    </div>
                </a>
                
            </li>
    
    
    <form action="seeting" method="get">
    <div class="form-group">
        <label for="namalengkap">Nama Akun</label>
        <input type="text" class="form-control" id="namalengkap" placeholder="Nama Akun" required>
    </div>
    <div class="form-group">
        <label for="username">Username</label>
        <input type="text" class="form-control" id="username" placeholder="Username" required>
    </div>
    <div class="form-group">
        <label for="password">Password</label>
        <input type="password" class="form-control" id="password" placeholder="Password" required>
    </div>
    <div class="form-group">
        <label for="konfrimasi_password">Konfrimasi Password</label>
        <input type="password" class="form-control" id="konfrimasi_password" placeholder="Ulangi Password Anda" required>
    </div>
    <button type="submit" class="btn btn-primary">Update Akun</button>
</form> --}}