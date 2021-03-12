@extends('layouts/master')

@section('css')
    <link rel="stylesheet" href="{{ asset('halaman/guest/pendaftaran/pendaftaran-sukses.styles.css') }}">
@endsection

@section('title', 'Pendaftaran')
    
@section('content')
    <div class="card">
        <div class="card card-header">
            <h1 class="text-card">Pendaftaran Sukses</h1>
        </div>
        <div class="card-body">
            <h3 class="text-card-body">Pendaftaran siswa atas nama blablabla telah berhasil dan akan diverifikasi oleh admin</h3>
            <br>
            <p class="text-isi">No Pendaftaran anda : blaablaablaabl</p>
            <p class="text-isi">Silakan download formulir pendaftaran sebagai bukti pendaftaran dengan menekan tombol di bawah</p> 
        </div>
        <button class="btn btn-primary" type="submit">Download Formulir</button>
    </div>
@endsection