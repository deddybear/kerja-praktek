@extends('layouts/master')

@section('css')
<link rel="stylesheet" href="{{ asset('halaman/index/index.styles.css') }}">
@endsection

@section('title', 'Pengumuman PPDB')

@section('content')
<div class="shadow p-3 bg-white rounded">
    <section class="row after-carousel">
        <section class="announcement-section">
            <section class="announcement-section-title">
                <h4>
                    <i class="fa fa-list"></i>
                    <strong>PENGUMUMAN PPDB</strong>
                </h4>
            </section>
            <div class="announcement-list">
                <div class="container">
                    <div class="row">

                        <div class="shadow my-2 p-3 bg-white rounded">
                            <div class="row">
                                <div class="col-6">
                                    <div class="img-announcement">
                                        <img class="img-responsive" src="{{ asset('images/test-dev/gambar1.jpeg') }}">
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
                                        <img class="img-responsive" src="{{ asset('images/test-dev/gambar1.jpeg') }}">
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
                                        <img class="img-responsive" src="{{ asset('images/test-dev/gambar1.jpeg') }}">
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
                                        <img class="img-responsive" src="{{ asset('images/test-dev/gambar1.jpeg') }}">
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
        </section>
    </section>
</div>
@endsection