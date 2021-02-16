@extends('layouts/master')

@section('title', 'Profil Sekolah')

@section('css')
<link rel="stylesheet" href="{{ asset('halaman/index/index.styles.css') }}">

@section('content')
<div class="shadow p-3 mb-5 bg-white rounded">
    <section class="row after-carousel">
        <div class="col-12">
            <section class="announcement-section">
                <section class="announcement-section-title">
                    <h4>
                        <i class="fa fa-list"></i>
                        <strong>PROFILE SEKOLAH</strong>
                    </h4>
                </section>
            <div class="card card-primary card-tabs">
                <div class="card-header p-0 pt-1">
                    <ul class="nav nav-tabs" id="custom-tabs-one-tab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="custom-tabs-one-home-tab" data-toggle="pill"
                                href="#custom-tabs-one-home" role="tab" aria-controls="custom-tabs-one-home"
                                aria-selected="true">Profile</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="custom-tabs-one-profile-tab" data-toggle="pill"
                                href="#custom-tabs-one-profile" role="tab" aria-controls="custom-tabs-one-profile"
                                aria-selected="false">Visi dan Misi</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="custom-tabs-one-messages-tab" data-toggle="pill"
                                href="#custom-tabs-one-messages" role="tab" aria-controls="custom-tabs-one-messages"
                                aria-selected="false">Fasilitas</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="custom-tabs-one-settings-tab" data-toggle="pill"
                                href="#custom-tabs-one-settings" role="tab" aria-controls="custom-tabs-one-settings"
                                aria-selected="false">Prestasi</a>
                        </li>
                    </ul>
                </div>
                <div class="card-body">
                    <div class="tab-content" id="custom-tabs-one-tabContent">
                        <div class="tab-pane fade show active" id="custom-tabs-one-home" role="tabpanel"
                            aria-labelledby="custom-tabs-one-home-tab">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin malesuada lacus ullamcorper
                            dui molestie, sit amet congue quam finibus. Etiam ultricies nunc non magna feugiat commodo.
                            Etiam odio magna, mollis auctor felis vitae, ullamcorper ornare ligula. Proin pellentesque
                            tincidunt nisi, vitae ullamcorper felis aliquam id. Pellentesque habitant morbi tristique
                            senectus et netus et malesuada fames ac turpis egestas. Proin id orci eu lectus blandit
                            suscipit. Phasellus porta, ante et varius ornare, sem enim sollicitudin eros, at commodo leo
                            est vitae lacus. Etiam ut porta sem. Proin porttitor porta nisl, id tempor risus rhoncus
                            quis. In in quam a nibh cursus pulvinar non consequat neque. Mauris lacus elit, condimentum
                            ac condimentum at, semper vitae lectus. Cras lacinia erat eget sapien porta consectetur.
                        </div>
                        <div class="tab-pane fade" id="custom-tabs-one-profile" role="tabpanel"
                            aria-labelledby="custom-tabs-one-profile-tab">
                            Mauris tincidunt mi at erat gravida, eget tristique urna bibendum. Mauris pharetra purus ut
                            ligula tempor, et vulputate metus facilisis. Lorem ipsum dolor sit amet, consectetur
                            adipiscing elit. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere
                            cubilia Curae; Maecenas sollicitudin, nisi a luctus interdum, nisl ligula placerat mi, quis
                            posuere purus ligula eu lectus. Donec nunc tellus, elementum sit amet ultricies at, posuere
                            nec nunc. Nunc euismod pellentesque diam.
                        </div>
                        <div class="tab-pane fade" id="custom-tabs-one-messages" role="tabpanel"
                            aria-labelledby="custom-tabs-one-messages-tab">
                            Morbi turpis dolor, vulputate vitae felis non, tincidunt congue mauris. Phasellus volutpat
                            augue id mi placerat mollis. Vivamus faucibus eu massa eget condimentum. Fusce nec hendrerit
                            sem, ac tristique nulla. Integer vestibulum orci odio. Cras nec augue ipsum. Suspendisse ut
                            velit condimentum, mattis urna a, malesuada nunc. Curabitur eleifend facilisis velit finibus
                            tristique. Nam vulputate, eros non luctus efficitur, ipsum odio volutpat massa, sit amet
                            sollicitudin est libero sed ipsum. Nulla lacinia, ex vitae gravida fermentum, lectus ipsum
                            gravida arcu, id fermentum metus arcu vel metus. Curabitur eget sem eu risus tincidunt
                            eleifend ac ornare magna.
                        </div>
                        <div class="tab-pane fade" id="custom-tabs-one-settings" role="tabpanel"
                            aria-labelledby="custom-tabs-one-settings-tab">
                            Pellentesque vestibulum commodo nibh nec blandit. Maecenas neque magna, iaculis tempus
                            turpis ac, ornare sodales tellus. Mauris eget blandit dolor. Quisque tincidunt venenatis
                            vulputate. Morbi euismod molestie tristique. Vestibulum consectetur dolor a vestibulum
                            pharetra. Donec interdum placerat urna nec pharetra. Etiam eget dapibus orci, eget aliquet
                            urna. Nunc at consequat diam. Nunc et felis ut nisl commodo dignissim. In hac habitasse
                            platea dictumst. Praesent imperdiet accumsan ex sit amet facilisis.
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