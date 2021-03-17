@extends('layouts/master')

@section('css')
<link rel="stylesheet" href="{{ asset('halaman/guest/index/index.styles.css') }}">
@endsection

@section('script')

@endsection

@section('title', $title)

@section('content')
{{-- {{ dump($data) }} --}}
<div class="shadow p-3 bg-white rounded">
    <section class="row after-carousel">
        <section class="announcement-section">
            <section class="announcement-section-title">
                <h4>
                    <i class="fa fa-list"></i>
                    <strong>{{ $title }}</strong>
                </h4>
            </section>
            <div class="announcement-list">
                <div class="container">
                    <div class="row p-3">
                        @forelse ($data as $item)
                        <div class="card mb-3 m-6">
                            <div class="row no-gutters">
                                <div class="col-md-4">
                                    <img class="card-img" src="{{  $item->sampul_artikel  }}" style="max-height: 211px">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h4>
                                            <a href="/show/{{ $item->slug }}">{{  $item->nama_artikel  }}</a>
                                        </h4>
                                        <p class="card-text">
                                            {{  str_limit(strip_tags($item->isi_artikel), 250)  }}
                                            @if (strlen(strip_tags($item->isi_artikel)) > 250)
                                                <a href="/show/{{ $item->slug }}">Lihat Selengkapnya</a>
                                            @endif
                                        </p>
                                        <p class="card-text"><small class="text-muted">Diposting pada {{ $item->created_at }}</small></p>
                                    </div>
                                </div>
                            </div>
                        </div> 
                        @empty
                            <h1>Tidak Ada Pengumuman PPDB</h1>
                        @endforelse                       
                    </div>
                </div>
            </div>
        </section>
    </section>
</div>
@endsection