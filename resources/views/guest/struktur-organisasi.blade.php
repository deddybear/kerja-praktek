@extends('layouts/master')

@section('title', 'Struktur Organisasi')

@section('css')
<link rel="stylesheet" href="{{ asset('halaman/guest/index/index.styles.css') }}">
<link rel="stylesheet" href="{{ asset('plugin/dataTables/datatables.css') }}">
@endsection

@section('script')
<script src="{{ asset('plugin/dataTables/datatables.js') }}"></script>

<script src="{{ asset('halaman/guest/struktur-organisasi/struktur-organisasi.js') }}"></script>
@endsection

@section('content')
<div class="container">
    <div class="shadow p-3 bg-white rounded">
        <section class="after-carousel">
            <section class="announcement-section">
                    <section class="announcement-section-title">
                    <h4>
                        <i class="fa fa-user"></i>
                        <strong>STRUKTUR ORGANISASI</strong>

                    </h4>
                </section>
                <div class="container">
                    <div class="announcement-list">
                        <div class="table-responsive">
                            <table id="tabel-organisasi" class="table table-hover text-nowrap">
                                <thead>
                                    <tr>
                                        <th>NIP</th>
                                        <th>Nama</th>
                                        <th>Pendidikan Terakhir</th>
                                        <th>Jabatan</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($pegawai as $item)
                                    <tr>
                                        <td>{{ $item->nip }}</td>
                                        <td>{{ $item->nama_pegawai }}</td>
                                        <td>{{ $item->pendidikan_terakhir }}</td>
                                        <td>{{ $item->jabatan }}</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </section>
        </section>
    </div>

</div>

@endsection