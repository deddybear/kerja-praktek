@extends('layouts/master')

@section('title', 'Profil Sekolah')

@section('css')
<link rel="stylesheet" href="{{ asset('plugin/dataTables/datatables.css') }}">
<link rel="stylesheet" href="{{ asset('halaman/guest/profile/profile.styles.css') }}">
<link rel="stylesheet" href="{{ asset('halaman/guest/index/index.styles.css') }}">
@endsection

@section('script')
<script src="{{ asset('plugin/dataTables/datatables.js') }}"></script>
<script src="{{ asset('halaman/guest/profile/profile.js') }}"></script>
@endsection

@section('content')
<div class="shadow p-3 bg-white rounded">
    <section class="row after-carousel">
        <div class="col-12">
            <section class="announcement-section">
                <section class="announcement-section-title">
                    <h4>
                        <i class="fa fa-school"></i>
                        <strong>PROFILE SEKOLAH</strong>
                    </h4>
                </section>
                <div class="card card-primary card-tabs">
                    <div class="card-header p-0 pt-1">
                        <ul class="nav nav-tabs" id="custom-tabs-one-tab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="custom-tabs-one-home-tab" data-toggle="pill"
                                    href="#profil" role="tab" aria-controls="custom-tabs-one-home"
                                    aria-selected="true">Profile</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="custom-tabs-one-profile-tab" data-toggle="pill"
                                    href="#visi-misi" role="tab" aria-controls="custom-tabs-one-profile"
                                    aria-selected="false">Visi dan Misi</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="custom-tabs-one-messages-tab" data-toggle="pill"
                                    href="#fasilitas" role="tab" aria-controls="custom-tabs-one-messages"
                                    aria-selected="false">Fasilitas</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="custom-tabs-one-settings-tab" data-toggle="pill"
                                    href="#prestasi" role="tab" aria-controls="custom-tabs-one-settings"
                                    aria-selected="false">Prestasi</a>
                            </li>
                        </ul>
                    </div>
                    <div class="card-body">
                        <div class="tab-content" id="custom-tabs-one-tabContent">
                            <div class="tab-pane fade show active" id="profil" role="tabpanel"
                                aria-labelledby="custom-tabs-one-home-tab">
                                @foreach ($data as $item)
                                    {!! $item->isi_profile !!}
                                @endforeach
                            </div>
                            <div class="tab-pane fade" id="visi-misi" role="tabpanel"
                                aria-labelledby="custom-tabs-one-profile-tab">
                                @foreach ($data as $item)
                                    {!! $item->visi_misi !!}
                                @endforeach
                            </div>
                            <div class="tab-pane fade" id="fasilitas" role="tabpanel"
                                aria-labelledby="custom-tabs-one-messages-tab">
                                <div class="table-responsive">
                                    <table class="table table-hover text-nowrap" id="tabel-fasilitas">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Jenis</th>
                                                <th>Nama</th>
                                                <th>Jumlah</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($data as $item)
                                                @foreach ($item->fasilitas as $fasilitas)
                                                <tr>                                                
                                                    <td>{{ $loop->iteration }}</td>
                                                    <td>{{ $fasilitas->jenis }}</td>
                                                    <td>{{ $fasilitas->nama }}</td>
                                                    <td>{{ $fasilitas->jumlah }}</td>
                                                </tr>                                                                                                
                                                @endforeach                                        
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="prestasi" role="tabpanel"
                                aria-labelledby="custom-tabs-one-settings-tab">
                                <div class="table-responsive">
                                    <table class="table table-hover text-nowrap" id="tabel-prestasi">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Peringkat</th>
                                                <th>Lomba</th>
                                                <th>Penyelenggara</th>
                                                <th>Oleh</th>
                                                <th>Waktu</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($data as $item)
                                                @foreach ($item->prestasi as $prestasi)                                                    
                                                <tr>
                                                    <td>{{ $loop->iteration }}</td>
                                                    <td>{{ $prestasi->peringkat }}</td>
                                                    <td>{{ $prestasi->nama_lomba }}</td>
                                                    <td>{{ $prestasi->penyelenggara }}</td>
                                                    <td>{{ $prestasi->diperoleh }}</td>
                                                    <td>{{ $prestasi->waktu }}</td>
                                                </tr>                                                
                                                @endforeach
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>    
        </div>
    </section>
</div>
@endsection