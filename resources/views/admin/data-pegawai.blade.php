@extends('layouts/master-admin')

@section('title', 'Data Pegawai')

@section('css')
<link rel="stylesheet" href="{{ asset('plugin/sweetalert2/sweetalert2.css') }}">
@endsection

@section('script')
<script src="{{ asset('plugin/sweetalert2/sweetalert.min.js') }}"></script>

<script src="{{ asset('halaman/admin/data-sekolah/data-pegawai.js') }}"></script>
@endsection

@section('content')
<div class="mx-auto">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h2 class="card-title">Data Pegawai</h2>
                    <div class="card-tools">
                        <a id="tambah-pegawai" href="#" class="btn btn-success" data-toggle="modal"
                            data-target="#modal-pegawai">Tambah Pegawai</a>
                    </div>
                </div>

                <!-- /.card-header -->
                <div class="card-body table-responsive p-0">
                    <table class="table table-hover text-nowrap">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>NIP</th>
                                <th>Nama</th>
                                <th>Alamat</th>
                                <th>Pendidikan Terakhir</th>
                                <th>Jabatan</th>
                                <th>Data Dibuat</th>
                                <th>Data Terakhir Update</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody id="data-pegawai">
                            <tr>
                                <td>1</td>
                                <td>555</td>
                                <td>Bahlul</td>
                                <td>Jl. Jagiran Selatan No. 15</td>
                                <td>S-1</td>
                                <td>Guru Tetap</td>
                                <td>2020-01-20</td>
                                <td>2020-01-27</td>
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
<div class="modal fade" id="modal-pegawai" tabindex="-1" role="dialog" aria-labelledby="ModalLabel" aria-hidden="true">
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
                            <span class="input-group-text">NIP</span>
                        </div>
                        <input name="nip" id="nip" type="text" class="form-control" aria-label="Sizing example input"
                            aria-describedby="inputGroup-sizing-default">
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text">Nama</span>
                        </div>
                        <input name="nama_lengkap" id="nama_lengkap" type="text" class="form-control"
                            aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text">Alamat</span>
                        </div>
                        <input name="alamat" id="alamat" type="text" class="form-control"
                            aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text">Pendidikan Terakhir</span>
                        </div>
                        <select name="jenis_artikel" class="form-control">
                            <option value="Ar-1" selected>SMA/SMK</option>
                            <option value="Ar-2">D-1</option>
                            <option value="Ar-3">D-2</option>
                            <option value="Ar-4">D-3</option>
                            <option value="Ar-5">D-4/S-1</option>
                            <option value="Ar-6">S-2</option>
                            <option value="Ar-7">S-3</option>
                        </select>
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text">Jabatan</span>
                        </div>
                        <select name="jenis_artikel" class="form-control">
                            <option value="Ar-1">Kepala Sekolah</option>
                            <option value="Ar-2" selected>Guru Tetap</option>
                            <option value="Ar-3">Guru Honorer</option>
                            <option value="Ar-4">Guru Agama</option>
                            <option value="Ar-5">Guru Olahraga</option>
                            <option value="Ar-6">Guru Bahasa Inggris</option>
                            <option value="Ar-7">Pesuruh</option>
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