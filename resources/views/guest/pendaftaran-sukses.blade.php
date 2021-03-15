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
            <h3 class="text-card-body">Pendaftaran siswa atas nama <b>{{ $nama }}</b> telah berhasil dan akan diverifikasi oleh admin</h3>
            <br>
            <p class="text-isi">ID Pendaftaran anda : <b>{{ $id }}</b></p>
            <p class="text-isi">Nama Peserta : <b>{{ $nama }}</b></p>
            <p class="text-isi"><b>WAJIB</b> mendownload Data pendaftaran anda, digunakan untuk validasi sebagai bukti pendaftaran dengan menekan tombol di bawah ini</p> 
            <p class="text-isi"><b>Simpan baik baik & Jaga kerahasiaan data anda !</b></p>
        </div>
        <div class="container my-3">
            <div class="row px-auto">
                <div class="col-6 col-lg-3 mx-auto">
                    <a class="btn btn-sm btn-secondary" href='/pendaftaran/download-data/{{ $id }}'>Download Data Pendaftaran Anda</a>
                </div>
                <div class="col-4 col-lg-3 mx-auto">
                    <a class="btn btn-sm btn-success" href='/'>Kembali ke Homepage</a>
                </div>
            </div>
        </div>
    </div>
@endsection