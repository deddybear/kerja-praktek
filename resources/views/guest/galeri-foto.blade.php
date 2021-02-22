@extends('layouts/master')

@section('title', 'Galeri Foto')

@section('css')
<link rel="stylesheet" href="{{ asset('halaman/guest/galeri-foto/galeri-foto.styles.css') }}">
@endsection

@section('script')

@endsection


@section('content')
<div class="row">
    @foreach ($galerifoto as $item)
    <div class="card m-3" style="width: 18rem;">
        <img src="{{ asset($item->source) }}" class="card-img-top foto" alt="...">
        <div class="card-body">
            <p class="card-text">{{ $item->judul }}</p>
        </div>
    </div>
    @endforeach

</div>
@endsection