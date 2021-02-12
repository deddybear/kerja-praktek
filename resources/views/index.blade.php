@extends('layouts/master')

@section('title', 'Welcome')

@section('css')
<link rel="stylesheet" href="{{ asset('halaman/index/index.styles.css') }}">
<link rel="stylesheet" href="{{ asset('owlcarousel/css/owl.carousel.css') }}">
<link rel="stylesheet" href="{{ asset('owlcarousel/css/owl.theme.default.css') }}">
@endsection

@section('script')
<script src="{{ asset('halaman/index/index.js') }}"></script>
<script src="{{ asset('owlcarousel/js/owl.carousel.js') }}"></script>
@endsection

@section('content')

<div class="shadow p-3 mb-5 bg-white rounded">
    <section class="row after-carousel">
        <section class="col-12 news-section">
            <section class="news-section-title">
                <h3>
                    <i class="fa fa-newspaper"></i>
                    TULISAN TERBARU
                </h3>
                <div class="text-right">
                    <a href="/artikel" class="text-dark">
                        <i class="fa fa-chevron-right"></i>
                    Selengkapnya</a>
                </div>
            </section>
            <section class="owl-carousel owl-theme owl-loaded owl-drag">
                <div class="owl-stage-outer">
                    <div class="owl-stage">
                        
                        <div class="owl-item mx-3">
                            <div class="kotak bg-secondary mx-3" style="width:250px; height:250px;"></div>
                        </div>


                    </div>
                </div>
            </section>
        </section>
    </section>
</div>

@endsection