@extends('layouts/master')

@section('title', 'Galeri Video')

@section('css')
<link rel="stylesheet" href="{{ asset('halaman/guest/galeri-video/galeri-video.styles.css') }}">
@endsection

@section('script')

@endsection

@section('content')
<div class="row">
    @foreach ($galerivideo as $item)
    <div class="col-4 mb-3">
       <div class="embed-responsive embed-responsive-16by9">
           {!! $item->source !!}
       </div>
    </div>
    @endforeach

</div>
@endsection