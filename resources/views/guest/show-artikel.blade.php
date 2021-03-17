@extends('layouts/master')

@section('css')
    <link rel="stylesheet" href="{{ asset('halaman/guest/index/index.styles.css') }}">
@endsection

@section('title', $data->nama_artikel)

@section('content')
    <div class="container">
        <h2>{{ $data->nama_artikel }}</h2>
        {!! $data->isi_artikel !!}
        <p><small class="text-muted">{{ $data->created_at }}</small></p>
    </div>
@endsection
