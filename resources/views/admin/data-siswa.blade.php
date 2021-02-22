@extends('layouts/master-admin')

@section('title', 'Data Siswa')

@section('css')
<link rel="stylesheet" href="{{ asset('plugin/sweetalert2/sweetalert2.css') }}">
@endsection

@section('script')
<script src="{{ asset('plugin/sweetalert2/sweetalert.min.js') }}"></script>

<script src="{{ asset('halaman/admin/data-sekolah/data-siswa.js') }}"></script>
@endsection

@section('content')
<div class="mx-auto">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h2 class="card-title">Data Siswa</h2>
                </div>

                <!-- /.card-header -->
                <div class="card-body table-responsive p-0">
                    <table class="table table-hover text-nowrap">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>NIS</th>
                                <th>Nama</th>
                                <th>Alamat</th>
                                <th>Agama</th>
                                <th>Data Dibuat</th>
                                <th>Data Terakhir Update</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody id="data-siswa">
                            <tr>
                                <td>1</td>
                                <td>555</td>
                                <td>Bahlul</td>
                                <td>Jl. Sidosermo IV No. 29</td>
                                <td>Islam</td>
                                <td>2020-01-20</td>
                                <td>2020-01-24</td>
                                <td>
                                    <a href="javascript:;" id="tombol-edit" class="btn btn-info"
                                        data="'+ row.id_users+'"> Edit Data</a>
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
<div class="modal fade" id="modal-data-siswa" tabindex="-1" role="dialog" aria-labelledby="ModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <form method="post" id="form">
                <div class="modal-body">
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text">NIS</span>
                        </div>
                        <input required name="nis" id="nis" type="text" class="form-control" aria-label="Sizing example input"
                            aria-describedby="inputGroup-sizing-default">
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text">Nama Lengkap</span>
                        </div>
                        <input required name="nama_lengkap" id="nama_lengkap" type="text" class="form-control"
                            aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text">Alamat</span>
                        </div>
                        <input required name="alamat" id="alamat" type="text" class="form-control"
                            aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text">Agama</span>
                        </div>
                        <select required name="jenis_artikel" class="form-control">
                            <option value="Ar-1" selected>Islam</option>
                            <option value="Ar-2">Kristen</option>
                            <option value="Ar-3">Katolik</option>
                            <option value="Ar-4">Hindu</option>
                            <option value="Ar-5">Buddha</option>
                            <option value="Ar-6">Konghuchu</option>
                        </select>
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