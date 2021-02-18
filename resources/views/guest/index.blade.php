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
                        <div class="col-6">
                            <div class="img-announcement">
                                <img class="img-responsive"
                                    src="{{ asset('images/test-dev/hai.jpg') }}">
                            </div>
                        </div>
                        <div class="col-6">
                                <div class="row">
                                    <div class="col">
                                        <div class="text-announcement">
                                            <p>Assalamu'alaikum Wr. Wb</p>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
                                            Laboriosam nisi, expedita aut maxime delectus magni perferendis quod 
                                            inventore dolor officia ducimus minus vel est, dolore repudiandae sint. Ad, ullam quidem.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="news-section">
                <section class="news-section-title">
                    <h4>
                        <i class="fa fa-newspaper"></i>
                        <strong>TULISAN TERBARU</strong>
                    </h4>
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
                                            <img class="img-fluid" src="{{ asset('images/test-dev/gambar1.jpeg') }}">
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
        <section class="announcement-section">
            <section class="announcement-section-title">
                <h4>
                    <i class="fa fa-list"></i>
                    <strong>PENGUMUMAN</strong>
                </h4>
                <div class="text-right mr-3">
                    <a href="/ppdb" class="text-dark">
                        <i class="fa fa-chevron-right"></i>
                        Selengkapnya</a>
                    </div>
                </section>
                <div class="announcement-list">
                    <div class="container">
                        <div class="row">
                            <div class="col-6">
                                <div class="shadow my-2 p-3 bg-white rounded">
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="img-announcement">
                                                <img class="img-responsive"
                                                src="{{ asset('images/test-dev/gambar1.jpeg') }}">
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="text-announcement">
                                                <a href="#">Give away Panlok</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="shadow my-2 p-3 bg-white rounded">
                                    <div class="row">
                                    <div class="col-6">
                                        <div class="img-announcement">
                                            <img class="img-responsive"
                                            src="{{ asset('images/test-dev/gambar1.jpeg') }}">
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="text-announcement">
                                            <a href="#">Give away Panlok</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="shadow my-2 p-3 bg-white rounded">
                                <div class="row">
                                    <div class="col-6">
                                        <div class="img-announcement">
                                            <img class="img-responsive"
                                            src="{{ asset('images/test-dev/gambar1.jpeg') }}">
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="text-announcement">
                                            <a href="#">Give away Panlok</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="shadow my-2 p-3 bg-white rounded">
                                <div class="row">
                                    <div class="col-6">
                                        <div class="img-announcement">
                                            <img class="img-responsive"
                                            src="{{ asset('images/test-dev/gambar1.jpeg') }}">
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="text-announcement">
                                            <a href="#">Give away Panlok</a>
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