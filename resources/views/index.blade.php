@extends('layouts/master')

@section('title', 'Welcome')

@section('css')
<link rel="stylesheet" href="{{ asset('halaman/index/index.styles.css') }}">
<link rel="stylesheet" href="{{ asset('owlcarousel/css/owl.carousel.css') }}">
<link rel="stylesheet" href="{{ asset('owlcarousel/css/owl.theme.default.css') }}">
@endsection

@section('script')
<script src="{{ asset('owlcarousel/js/owl.carousel.js') }}"></script>
<script src="{{ asset('halaman/index/index.js') }}"></script>
@endsection

@section('content')
<div class="shadow p-3 bg-white rounded">
    <section class="row after-carousel">
        <section class="news-section">
            <section class="news-section-title">
                <h3>
                    <i class="fa fa-newspaper"></i>
                    TULISAN TERBARU
                </h3>
                <div class="text-right mr-3">
                    <a href="/artikel" class="text-dark">
                        <i class="fa fa-chevron-right"></i>
                    Selengkapnya</a>
                </div>
            </section>
            <div class="owl-carousel owl-theme owl-loaded">
                <div class="owl-stage-outer">
                    <div class="owl-stage">
                        <div class="owl-item">
                            <div class="card-container">
                                <div class="card-image">
                                    <img class="img-fluid" src="{{ asset('images/test-dev/gambar1.jpeg') }}" >
                                    <div class="card-details">
                                        <div class="created-at">14 July 2019</div>
                                        <div class="post-link">
                                            <a href="#">Judul</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="owl-item">
                            <div class="card-container">
                                <div class="card-image">
                                    <img class="img-fluid" src="{{ asset('images/test-dev/gambar2.jpeg') }}">
                                    <div class="card-details">
                                        <div class="created-at">14 July 2019</div>
                                        <div class="post-link">
                                            <a href="#">Judul</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="owl-item">
                            <div class="card-container">
                                <div class="card-image">
                                    <img class="img-fluid" src="{{ asset('images/test-dev/gambar3.jpeg') }}">
                                    <div class="card-details">
                                        <div class="created-at">14 July 2019</div>
                                        <div class="post-link">
                                            <a href="#">Judul</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="owl-item">
                            <div class="card-container">
                                <div class="card-image">
                                    <img class="img-fluid" src="{{ asset('images/test-dev/gambar4.jpeg') }}">
                                    <div class="card-details">
                                        <div class="created-at">14 July 2019</div>
                                        <div class="post-link">
                                            <a href="#">Judul</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="owl-item">
                            <div class="card-container">
                                <div class="card-image">
                                    <img class="img-fluid" src="{{ asset('images/test-dev/gambar5.jpeg') }}">
                                    <div class="card-details">
                                        <div class="created-at">14 July 2019</div>
                                        <div class="post-link">
                                            <a href="#">Judul</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="owl-item">
                            <div class="card-container">
                                <div class="card-image">
                                    <img class="img-fluid" src="{{ asset('images/test-dev/gambar5.jpeg') }}">
                                    <div class="card-details">
                                        <div class="created-at">14 July 2019</div>
                                        <div class="post-link">
                                            <a href="#">Judul</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="owl-item">
                            <div class="card-container">
                                <div class="card-image">
                                    <img class="img-fluid" src="{{ asset('images/test-dev/gambar5.jpeg') }}">
                                    <div class="card-details">
                                        <div class="created-at">14 July 2019</div>
                                        <div class="post-link">
                                            <a href="#">Judul</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="owl-item">
                            <div class="card-container">
                                <div class="card-image">
                                    <img class="img-fluid" src="{{ asset('images/test-dev/gambar5.jpeg') }}">
                                    <div class="card-details">
                                        <div class="created-at">14 July 2019</div>
                                        <div class="post-link">
                                            <a href="#">Judul</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </section>
</div>

@endsection