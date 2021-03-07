@extends('layouts/master')

@section('title', 'Galeri Video')

@section('css')
<link rel="stylesheet" href="{{ asset('halaman/guest/galeri-video/galeri-video.styles.css') }}">
@endsection

@section('script')

@endsection

@section('content')
@if ($galerivideo->isEmpty())
    <h1>Data Kosong</h1>
@else
<div class="row">
    <h1 class="my-3">isi</h1>
    @foreach ($galerivideo as $item)
    <div class="col-4 mb-3">
        <div class="embed-responsive embed-responsive-16by9">
            {!! $item->source !!}
        </div>
    </div>
    @endforeach
</div>
@endif
@endsection