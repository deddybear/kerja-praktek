@extends('layouts/master')

@section('title', 'Profil Sekolah')

@section('css')
<link rel="stylesheet" href="{{ asset('halaman/guest/index/index.styles.css') }}">

@section('content')
<div class="shadow p-3 mb-5 bg-white rounded">
    <section class="row after-carousel">
        <div class="col-12">
            <section class="announcement-section">
                <section class="announcement-section-title">
                    <h4>
                        <i class="fa fa-school"></i>
                        <strong>PROFILE SEKOLAH</strong>
                    </h4>
                </section>
                <div class="card card-primary card-tabs">
                    <div class="card-header p-0 pt-1">
                        <ul class="nav nav-tabs" id="custom-tabs-one-tab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="custom-tabs-one-home-tab" data-toggle="pill"
                                    href="#profil" role="tab" aria-controls="custom-tabs-one-home"
                                    aria-selected="true">Profile</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="custom-tabs-one-profile-tab" data-toggle="pill"
                                    href="#visi-misi" role="tab" aria-controls="custom-tabs-one-profile"
                                    aria-selected="false">Visi dan Misi</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="custom-tabs-one-messages-tab" data-toggle="pill"
                                    href="#fasilitas" role="tab" aria-controls="custom-tabs-one-messages"
                                    aria-selected="false">Fasilitas</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="custom-tabs-one-settings-tab" data-toggle="pill"
                                    href="#prestasi" role="tab" aria-controls="custom-tabs-one-settings"
                                    aria-selected="false">Prestasi</a>
                            </li>
                        </ul>
                    </div>
                    <div class="card-body">
                        <div class="tab-content" id="custom-tabs-one-tabContent">
                            <div class="tab-pane fade show active" id="profil" role="tabpanel"
                                aria-labelledby="custom-tabs-one-home-tab">
                                <table class="table-borderless">
                                    <tbody>
                                        <tr>
                                            <td style="width: 200">NSS</td>
                                            <td style="width: 10">:</td>
                                            <td style="width: 350">102056005059</td>
                                        </tr>
                                        <tr>
                                            <td style="width: 200">Nama Sekolah</td>
                                            <td style="width: 10">:</td>
                                            <td style="width: 350">SD DIPONEGORO SURABAYA</td>
                                        </tr>
                                        <tr>
                                            <td style="width: 200">Tanggal Pendirian</td>
                                            <td style="width: 10">:</td>
                                            <td style="width: 350">24 Maret 1973</td>
                                        </tr>
                                        <tr>
                                            <td style="width: 200">Status Sekolah</td>
                                            <td style="width: 10">:</td>
                                            <td style="width: 350">Swasta</td>
                                        </tr>
                                        <tr>
                                            <td style="width: 200">Akreditasi</td>
                                            <td style="width: 10">:</td>
                                            <td style="width: 350">B</td>
                                        </tr>
                                        <tr>
                                            <td style="width: 200">Sertifikasi</td>
                                            <td style="width: 10">:</td>
                                            <td style="width: 350">200/BAP-S/M/SK/X/2016</td>
                                        </tr>
                                        <tr>
                                            <td style="width: 200">Kepala Sekolah</td>
                                            <td style="width: 10">:</td>
                                            <td style="width: 350">Sri Wahyu Maikaningrum, ST</td>
                                        </tr>
                                        <tr>
                                            <td style="width: 200">Yayasan</td>
                                            <td style="width: 10">:</td>
                                            <td style="width: 600">TAMAN PENDIDIKAN HARAPAN BANGSA DIPONEGORO</td>
                                        </tr>
                                        <tr>
                                            <td style="width: 200"></td>
                                            <td style="width: 10"></td>
                                            <td style="width: 250">Alamat : JL. Tambang Boyo 36</td>
                                        </tr>
                                        <tr>
                                            <td style="width: 200"></td>
                                            <td style="width: 10"></td>
                                            <td style="width: 250">Pimpinan : Drs. Ir. Moch. Shofiyulhadi, SH. MBA</td>
                                        </tr>
                                        <tr>
                                            <td style="width: 200">Alamat</td>
                                            <td style="width: 10">:</td>
                                            <td style="width: 350">Jl. Kedung Sroko V / 15 - 21 Surabaya</td>
                                        </tr>
                                        <tr>
                                            <td style="width: 200"></td>
                                            <td style="width: 10"></td>
                                            <td style="width: 250">Kecamatan : Kec. Tambaksari</td>
                                        </tr>
                                        <tr>
                                            <td style="width: 200"></td>
                                            <td style="width: 10"></td>
                                            <td style="width: 250">Kelurahan : Kel. Pacar Kembang</td>
                                        </tr>
                                        <tr>
                                            <td style="width: 200"></td>
                                            <td style="width: 10"></td>
                                            <td style="width: 250"> Kode Pos  : 60132</td>
                                        </tr>
                                        <tr>
                                            <td style="width: 200"></td>
                                            <td style="width: 10"></td>
                                            <td style="width: 250"> No. Telp  : 081586795252</td>
                                        </tr>
                                        <tr>
                                            <td style="width: 200">E-mail</td>
                                            <td style="width: 10">:</td>
                                            <td style="width: 250">diponegoro15@gmail.com</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="tab-pane fade" id="visi-misi" role="tabpanel"
                                aria-labelledby="custom-tabs-one-profile-tab">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="container">
                                                <h3 style="text-align: center">Visi</h3>
                                                <p>Mengembangkan IMTAQ DAN IPTEK, Mandiri, Kreatif dan berkualitas</p>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="container">
                                                <h3 style="text-align: center">Misi</h3>
                                                <p>1. Memberi layanan pendidikan dasar lanjutan berdasarkan nilai –
                                                    nilai islami. </p>
                                                <p>2. Meningkatkan kemampuan anak didik dengan memberikan pengetahuan
                                                    dan ketrampilan.</p>
                                                <p>3. Melatih anak didik untuk bisa mengambil keputusan sendiri dalam
                                                    meningkatkan kualitas diri di pendidikan lanjutan dan kebudayaan di
                                                    masyarakat dan lingkungan sekitarnya.</p>
                                                <p>4. Mempersiapkan kader – kader muslim dan muslimah yang berkualitas
                                                    dalam pembentukan Al Mar’atus Sholihah yang berbudi tinggi dan
                                                    berbadan sehat.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="fasilitas" role="tabpanel"
                                aria-labelledby="custom-tabs-one-messages-tab">
                                <table class="table">
                                    <tbody>
                                        <tr>
                                            <td>No</td>
                                            <td>Jenis</td>
                                            <td>Nama</td>
                                            <td>Jumlah</td>
                                        </tr>
                                        <tr>
                                            <td>1</td>
                                            <td>Sarana</td>
                                            <td>Meja Siswa</td>
                                            <td>80 unit</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="tab-pane fade" id="prestasi" role="tabpanel"
                                aria-labelledby="custom-tabs-one-settings-tab">
                                <table class="table">
                                    <tbody>
                                        <tr>
                                            <td>No</td>
                                            <td>Peringkat</td>
                                            <td>Lomba</td>
                                            <td>Penyelenggara</td>
                                            <td>Waktu</td>
                                            <td>Jenis</td>
                                            <td>Oleh</td>
                                        </tr>
                                        <tr>
                                            <td>1</td>
                                            <td>JUARA 1</td>
                                            <td>Tartil Al-Qur'an</td>
                                            <td>Kec. Tambaksari</td>
                                            <td>2013-06-04</td>
                                            <td>Tartil Al-Qur'an</td>
                                            <td>Rifkiyanti Nuriyah</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <!-- /.card -->
                </div>
        </div>
        {{-- <section class="col-12 profil-section">
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
            </section> --}}
    </section>
</div>
@endsection