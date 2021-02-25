@extends('layouts/master-admin')

@section('title', 'Profil Sekolah')

@section('content-title', 'Profil Sekolah')

@section('warna-divider', 'costume-warna-border-dark')

@section('css')
<link rel="stylesheet" href="{{ asset('plugin/dataTables/datatables.css') }}">
@endsection

@section('script')
<script src="{{ asset('plugin/dataTables/datatables.js') }}"></script>
<script src="{{ asset('halaman/admin/profil/profil.js') }}"></script>
@endsection

@section('content')
<div class="container">
    <div class="card card-primary collapsed-card ">
        <div class="card-header">
            <h3 class="card-title">Profil</h3>
            <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
                </button>
            </div>
            <!-- /.card-tools -->
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <div class="row">
                <div class="container">
                    <a id="edit-profil" href="#" class="btn btn-primary" data-toggle="modal"
                        data-target="#modal-profil">Edit Profil</a>
                    <div class="card">
                        <div class="card-body">
                            <textarea readonly name="" id="" cols="135" rows="10"></textarea>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.card-body -->
    </div>
    <!-- /.card -->
</div>
<div class="container">
    <div class="card card-primary collapsed-card ">
        <div class="card-header">
            <h3 class="card-title">Visi dan Misi</h3>
            <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
                </button>
            </div>
            <!-- /.card-tools -->
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <div class="row">
                <div class="container">
                    <button class="btn btn-primary mb-4">Edit Visi Misi</button>
                    <div class="card">
                        <div class="card-body">
                            <textarea readonly name="" id="" cols="135" rows="10"></textarea>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.card-body -->
    </div>
    <!-- /.card -->
</div>
<div class="container">
    <div class="card card-primary collapsed-card ">
        <div class="card-header">
            <h3 class="card-title">Fasilitas</h3>
            <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
                </button>
            </div>
            <!-- /.card-tools -->
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <div class="row">
                <div class="container">
                    <button class="btn btn-primary mb-4">Tambah Fasilitas</button>
                    <div class="card">
                        <div class="card-body">
                            <table class="table" id="fasilitas">
                                <thead>
                                    <th>No</th>
                                    <th>Jenis</th>
                                    <th>Nama</th>
                                    <th>Jumlah</th>
                                    <th>Aksi</th>
                                </thead>
                                <tbody>
                                    <td>1</td>
                                    <td>Sarana</td>
                                    <td>Meja</td>
                                    <td>80 Unit</td>
                                    <td>
                                        <button class="btn btn-primary">Edit Data</button>
                                        <button class="btn btn-danger">Hapus Data</button>
                                    </td>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.card-body -->
    </div>
    <!-- /.card -->
</div>
<div class="container">
    <div class="card card-primary collapsed-card ">
        <div class="card-header">
            <h3 class="card-title">Prestasi</h3>
            <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
                </button>
            </div>
            <!-- /.card-tools -->
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <div class="row">
                <div class="container">
                    <button class="btn btn-primary mb-4">Tambah Prestasi</button>
                    <div class="card">
                        <div class="card-body">
                            <table class="table" id="prestasi">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Peringkat</th>
                                        <th>Lomba</th>
                                        <th>Penyelenggara</th>
                                        <th>Waktu</th>
                                        <th>Jenis</th>
                                        <th>Oleh</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>JUARA 1</td>
                                        <td>Tartil Al-Qur'an</td>
                                        <td>Kec. Tambaksari</td>
                                        <td>2013-06-04</td>
                                        <td>Tartil Al-Qur'an</td>
                                        <td>Rifkiyanti Nuriyah</td>
                                        <td>
                                            <button class="btn btn-primary">Edit Data</button>
                                            <button class="btn btn-danger">Hapus Data</button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.card-body -->
    </div>
    <!-- /.card -->
</div>
<div class="modal fade" id="modal-profil" tabindex="-1" role="dialog" aria-labelledby="ModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" style="max-width: 1000px !important">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit Profil</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <form method="post" id="form">
                <div class="modal-body">
                    <div class="col-7">
                        <textarea id="summernote"></textarea>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" id="tombol-submit" class="btn btn-primary"></button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection