@extends('layouts/master')

@section('title', 'Welcome')

@section('css')
<link rel="stylesheet" href="{{ asset('halaman/guest/index/index.styles.css') }}">
<link rel="stylesheet" href="{{ asset('plugin/owlcarousel/css/owl.carousel.css') }}">
<link rel="stylesheet" href="{{ asset('plugin/owlcarousel/css/owl.theme.default.css') }}">
@endsection

@section('script')
<script src="{{ asset('plugin/owlcarousel/js/owl.carousel.js') }}"></script>
<script src="{{ asset('halaman/guest/index/index.js') }}"></script>
@endsection

@section('content')
<div class="shadow p-3 bg-white rounded">
    <section class="row after-carousel">
        <section class="announcement-section">
            <section class="announcement-section-title">
                <h4>
                    <i class="fa fa-user"></i>
                    <strong>SAMBUTAN</strong>
                </h4>
            </section>
            <div class="announcement-list">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-sm-4 mb-2">
                            <div class="img-announcement">
                                <img class="img-sambutan" src="{{ asset('images-dummy/test-dev/kepalasekolah.jpg') }}">
                            </div>
                        </div>
                        <div class="col-12 col-sm-7 ">
                            <div class="text-announcement">
                                <p>Assalamu'alaikum Wr. Wb</p>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                    Laboriosam nisi, expedita aut maxime delectus magni perferendis quod
                                    inventore dolor officia ducimus minus vel est, dolore repudiandae sint. Ad, ullam
                                    quidem.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <section class="news-section">
                <section class="news-section-title">
                    <h4>
                        <i class="fa fa-newspaper"></i>
                        <strong>TULISAN TERBARU</strong>
                    </h4>
                    <div class="text-right mr-3">
                        <a href="/list-artikel" class="next text-dark">
                            <i class="fa fa-chevron-right"></i>
                            Selengkapnya</a>
                    </div>
                </section>
            </section>
            <div class="owl-carousel owl-theme owl-loaded">
                <div class="owl-stage-outer">
                    <div class="owl-stage">
                        @foreach ($data['tulisan_terbaru'] as $item)
                        <div class="owl-item">
                            <div class="card-container">
                                <div class="card-image">
                                    <img class="img-fluid" src="{{ $item->sampul_artikel }}">
                                    <div class="card-details">
                                        <div class="created-at">{{ $item->created_at }}</div>
                                        <div class="post-link">
                                            <a href="/show/{{ $item->slug }}">{{ $item->nama_artikel }}</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </section>
        <section class="announcement-section">
            <section class="announcement-section-title">
                <h4>
                    <i class="fa fa-list"></i>
                    <strong>PENGUMUMAN SEKOLAH</strong>
                </h4>
                <div class="text-right mr-3">
                    <a href="/list-artikel" class="next text-dark">
                        <i class="fa fa-chevron-right"></i>
                        Selengkapnya</a>
                </div>
            </section>
            <div class="announcement-list">
                <div class="container">
                    <div class="row">
                        @foreach ($data['artikel_sekolah'] as $item)
                        <div class="col-12 col-lg-6">
                            <div class="shadow my-2 p-3 bg-white rounded">
                                <div class="row">
                                    <div class="col-6">
                                        <div class="img-announcement">
                                            <img class="img-responsive" src="{{ $item->sampul_artikel }}">
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="text-announcement">
                                            <a href="/show/{{ $item->slug }}">{{ $item->nama_artikel }}</a>
                                        </div>
                                    </div>
                                </div>
                            </div>  
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </section>
        <section class="announcement-section">
            <section class="announcement-section-title">
                <h4>
                    <i class="fa fa-list"></i>
                    <strong>BERITA GURU</strong>
                </h4>
                <div class="text-right mr-3">
                    <a href="/list-artikel" class="next text-dark">
                        <i class="fa fa-chevron-right"></i>
                        Selengkapnya</a>
                </div>
            </section>
            <div class="announcement-list">
                <div class="container">
                    <div class="row">
                        @forelse ($data['artikel_guru'] as $item)
                        <div class="col-12 col-lg-6">
                            <div class="shadow my-2 p-3 bg-white rounded">
                                <div class="row">
                                    <div class="col-6">
                                        <div class="img-announcement">
                                            <img class="img-responsive" src="{{ $item->sampul_artikel }}">
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="text-announcement">
                                            <a href="/show/{{ $item->slug }}">{{ $item->nama_artikel }}</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @empty
                            <div class="col-12">
                                <h1>Data Kosong</h1>
                            </div>
                        @endforelse
                    </div>
                </div>
            </div>
        </section>
        <div class="announcement-section">
            <section class="announcement-section-title">
                <h4>
                    <i class="fa fa-list"></i>
                    <strong>BERITA SISWA</strong>
                </h4>
                <div class="text-right mr-3">
                    <a href="/list-artikel" class="next text-dark">
                        <i class="fa fa-chevron-right"></i>
                        Selengkapnya</a>
                </div>
            </section>
            <div class="announcement-list">
                <div class="container">
                    <div class="row">
                        @forelse ($data['artikel_siswa'] as $item)
                        <div class="col-12 col-lg-6">
                            <div class="shadow my-2 p-3 bg-white rounded">
                                <div class="row">
                                    <div class="col-6">
                                        <div class="img-announcement">
                                            <img class="img-responsive" src="{{ $item->sampul_artikel }}">
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="text-announcement">
                                            <a href="/show/{{ $item->slug }}">{{ $item->nama_artikel }}</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @empty
                            <div class="col-12">
                                <h1>Data Kosong</h1>
                            </div>
                        @endforelse
                    </div>
                </div>
            </div>
        </div>
    </section>
    </section>
</div>

@endsection