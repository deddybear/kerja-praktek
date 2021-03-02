@extends('layouts/master-admin')

@section('title', 'Pengumuman PPDB')

@section('css')
<link rel="stylesheet" href="{{ asset('plugin/sweetalert2/sweetalert2.css') }}">
<link rel="stylesheet" href="{{ asset('plugin/dataTables/datatables.css') }}">
@endsection

@section('script')
<script src="{{ asset('plugin/sweetalert2/sweetalert.min.js') }}"></script>
<script src="{{ asset('plugin/dataTables/datatables.js') }}"></script>

<script src="{{ asset('halaman/admin/data-siswa/data-pendaftar.js') }}"></script>
@endsection

@section('content')
<div class="mx-auto">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h2 class="card-title">Data Pendaftar</h2>
                </div>

                <!-- /.card-header -->
                <div class="card-body">
                    <div class="table-responsive p-0">
                        <table id="data-pendaftar" class="table table-hover text-nowrap">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>NIS</th>
                                    <th>NAMA</th>
                                    <th>Data Dibuat</th>
                                    <th>Status</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>555</td>
                                    <td>Bahlul</td>
                                    <td>2020-01-20</td>
                                    <td>Belum diverifikasi</td>
                                    <td>
                                        <a href="javascript:;" id="tombol-verifikasi" class="btn btn-info"
                                            data="'+ row.id_users+'"> Verifikasi Data</a>
                                        <a href="javascript:;" id="tombol-hapus" class="btn btn-warning"
                                            data="'+ row.id_users+'"> Hapus Data</a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection