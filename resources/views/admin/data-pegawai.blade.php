@extends('layouts/master-admin')

@section('title', 'Data Pegawai')

@section('css')
<link rel="stylesheet" href="{{ asset('plugin/sweetalert2/sweetalert2.css') }}">
<link rel="stylesheet" href="{{ asset('plugin/dataTables/datatables.css') }}">
@endsection

@section('script')
<script src="{{ asset('plugin/sweetalert2/sweetalert.min.js') }}"></script>
<script src="{{ asset('plugin/dataTables/datatables.js') }}"></script>
<script src="{{ asset('halaman/admin/data-pegawai/data-pegawai.js') }}"></script>
@endsection

@section('content')
<div class="mx-auto">
    {{ Auth::id() }}
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
                <div class="card-body">
                    <div class="table-responsive p-0">
                        <table id="tablePegawai" class="table table-hover text-nowrap">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Dibuat oleh</th>
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
                                
                            </tbody>
                        </table>
                    </div>
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
                        <input required name="nip" id="nip" type="text" class="form-control" aria-label="Sizing example input"
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
                            <span class="input-group-text">Alamat Pegawai</span>
                        </div>
                        <input required name="alamat" id="alamat" type="text" class="form-control"
                            aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text">Pendidikan Terakhir</span>
                        </div>
                        <select required name="pendidikan_terakhir" class="form-control">
                            <option value="" selected>-- Silahkan Dipilih --</option>
                            <option value="SMA">SMA</option>
                            <option value="SMK">SMK</option>
                            <option value="D1">D1</option>
                            <option value="D2">D2</option>
                            <option value="D3">D3</option>
                            <option value="D4 / S1">D4 / S1</option>
                            <option value="S2">S2</option>
                            <option value="S3">S3</option>
                        </select>
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text">Jabatan</span>
                        </div>
                        <select required name="jabatan" class="form-control">
                            <option value="" selected>-- Silahkan Dipilih --</option>
                            <option value="Kepala Sekolah">Kepala Sekolah</option>
                            <option value="Wakil Kepala Sekolah">Wakil Kepala Sekolah</option>
                            <option value="Guru Pengajar">Guru Pengajar</option>
                            <option value="Tata Usaha">Tata Usaha</option>
                            <option value="Penjaga Sekolah">Penjaga Sekolah</option>
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