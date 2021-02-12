@extends('layouts/master')

@section('title', 'Profil Sekolah')
    
@section('css')
    <link rel="stylesheet" href="{{ asset('halaman/profil/profil.styles.css') }}">

@section('content')
    <div class="shadow p-3 mb-5 bg-white rounded">
        <section class="row after-carousel">
            <section class="col-12 profil-section">
                <section class="profil-section-title">
                    <h3>
                        <i class="fa fa-school"></i>
                        PROFIL SEKOLAH
                    </h3>
                </section>
                <div>
                    <h4>Nama Sekolah : SD DIPONEGORO <br>
                        NSS : 102056005059 <br>
                        Tanggal Pendirian : 24 Maret 1973 <br>
                        Status Sekolah : Swasta <br>
                        Akreditas : B <br>
                        Kepala Sekolah : Sri Wahyu Maikaningrum, ST <br>
                        Yayasan : Taman Pendidikan Harapan Bangsa Diponegoro <br>
                        Alamat : Jl. Kedung Sroko V No 15-21, Tambaksari, Surabaya</h4>
                </div>
            </section>
        </section>
    </div>
@endsection