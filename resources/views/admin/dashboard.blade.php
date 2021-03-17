@extends('layouts/master-admin')

@section('title', 'Hi, Admin')

@section('content-title', 'Dashboard')

@section('script')
<script src="{{ asset('halaman/admin/dashboard/dashboard.js') }}"></script>
@endsection

@section('content')

<div class="container">
    <div class="row">
        <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
                <div class="inner">
                    <h3>{{ $data['total_artikel'] }}</h3>
                    <p>Total Artikel</p>
                </div>
                <div class="icon">
                    <i class="ion ion-bag"></i>
                </div>
                <a href="/dashboard/artikel-sekolah" class="small-box-footer">Selengkapya <i
                        class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
                <div class="inner">
                    <h3>{{ $data['total_nonvalid'] }}</h3>
                    <p>Validasi Data Pendaftar</p>
                </div>
                <div class="icon">
                    <i class="ion ion-stats-bars"></i>
                </div>
                <a href="/dashboard/data-pendaftaran" class="small-box-footer">Selengkapnya <i
                        class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
                <div class="inner">
                    <h3>{{ $data['total_pegawai'] }}</h3>
                    <p>Total Pegawai</p>
                </div>
                <div class="icon">
                    <i class="ion ion-person-add"></i>
                </div>
                <a href="/dashboard/data-pegawai" class="small-box-footer">Selengkapnya <i
                        class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
                <div class="inner">
                    <h3>{{ $data['total_galeri'] }}</h3>
                    <p>Total Galeri</p>
                </div>
                <div class="icon">
                    <i class="ion ion-pie-graph"></i>
                </div>
                <a href="#" class="small-box-footer" data-toggle="modal" data-target="#modal-pilih-galeri">Selengkapnya
                    <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>

        {{-- <div class="card card-danger">
            <div class="card-header">
                <h3 class="card-title">Detail Siswa</h3>

                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                    </button>
                    <button type="button" class="btn btn-tool" data-card-widget="remove"><i
                            class="fas fa-times"></i></button>
                </div>
            </div>
            <div class="card-body">

            </div>
            <!-- /.card-body -->
        </div> --}}

    </div>

</div>

<div class="modal fade" id="modal-pilih-galeri" tabindex="-1" role="dialog" aria-labelledby="ModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="exampleModalLabel">Pilih Galeri</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="container">
                    <div class="row">
                        <div class="col-5 mx-auto">
                            <a href="/dashboard/galeri-foto">
                            <div class="card">
                                <img class="m-auto" src="{{ asset('images-dummy/test-dev/iconfoto.png') }}" style="width: 100px; height: 100px">
                                <div class="card-body">
                                    <p style="text-align: center;">Galeri Video</p>
                                </div>
                            </div>
                        </a>
                        </div>
                        <div class="col-5 mx-auto">
                            <a href="/dashboard/galeri-video">
                            <div class="card">
                                <img class="m-auto" src="{{ asset('images-dummy/test-dev/iconvideo.png') }}" style="width: 100px; height: 100px">
                                <div class="card-body">                                    
                                    <p style="text-align: center;">Galeri Video</p>
                                </div>
                            </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->

@endsection