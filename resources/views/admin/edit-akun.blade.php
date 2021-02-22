@php
    $dataAkun = Auth::user();
@endphp

@extends('layouts/master-admin')

@section('title', 'Setting Akun')

@section('content-title', 'Setting Akun')

@section('warna-divider', 'costume-warna-border-dark')

@section('script')
    <script src="{{ asset('halaman/edit-akun/edit-akun.js') }}"></script>
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
                <a href="#" class="no-decoration">
                    <div class="row">
                        <div class="col-4">
                            <strong>Nama</strong>
                        </div>
                        <div class="col-7">
                            {{ $dataAkun->nama }}
                        </div>
                        <div class="col-1">
                            Edit
                        </div>
                    </div>
                </a>
            </li>
            <li class="list-group-item hover">
                <a href="#" class="no-decoration">
                    <div class="row">
                        <div class="col-4">
                            <strong>Username</strong>
                        </div>
                        <div class="col-7">
                            {{ $dataAkun->username }}
                        </div>
                        <div class="col-1">
                            Edit
                        </div>
                    </div>
                </a>
            </li>
            <li class="list-group-item hover">
                <a href="#" class="no-decoration">
                    <div class="row">
                        <div class="col-4">
                            <strong>Email</strong>
                        </div>
                        <div class="col-7">
                            {{ $dataAkun->email }}
                        </div>
                        <div class="col-1">
                            Edit
                        </div>
                    </div>
                </a>
            </li>
            <li class="list-group-item hover">
                <a href="#" class="no-decoration">
                    <div class="row">
                        <div class="col-4">
                            <strong>Tanggal Pendaftaran</strong>
                        </div>
                        <div class="col-7">
                            {{ $dataAkun->created_at }}
                        </div>
                        <div class="col-1">
                            Edit
                        </div>
                    </div>
                </a>
            </li>
            <li class="list-group-item hover">
                <a href="#" class="no-decoration">
                    <div class="row">
                        <div class="col-4">
                            <strong>Terakhir diperbarui</strong>
                        </div>
                        <div class="col-7">
                            {{ $dataAkun->updated_at }}
                        </div>
                        <div class="col-1">
                            Edit
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