@extends('layouts/master-admin')

@section('title', 'Pengumuman PPDB')

@section('css')
<link rel="stylesheet" href="{{ asset('plugin/sweetalert2/sweetalert2.css') }}">
<link rel="stylesheet" href="{{ asset('plugin/dataTables/datatables.css') }}">
@endsection

@section('script')
<script src="{{ asset('plugin/sweetalert2/sweetalert.min.js') }}"></script>
<script src="{{ asset('plugin/dataTables/datatables.js') }}"></script>

<script src="{{ asset('halaman/admin/data-pendaftaran/data-pendaftaran.js') }}"></script>
@endsection

@section('content')
<div class="mx-auto">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h2 class="card-title">Data Pendaftaran</h2>
                </div>

                <!-- /.card-header -->
                <div class="card-body">
                    <div class="table-responsive p-0">
                        <table id="table-pendaftaran" class="table table-hover text-nowrap" style="font-size: 80%">
                            <thead>
                                <tr>
                                    <th>ID Pendaftaraan</th>
                                    <th>NIK</th>
                                    <th>Nama Peserta</th>
                                    <th>Jenis Kelamin</th>
                                    <th>Agama</th>
                                    <th>Alamat</th>
                                    <th>Nama Ayah</th>
                                    <th>Nama Ibu</th>
                                    <th>Waktu Pendaftaran</th>
                                    <th>Status Pendaftaran</th>
                                    <th>Aksi 1</th>
                                    <th>Aksi 2</th>
                                </tr>
                            </thead>
                            <tbody id="data-pendaftaran"></tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection