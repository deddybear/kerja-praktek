@extends('layouts/master-admin')

@section('title', 'Galeri Foto')

@section('css')
<link rel="stylesheet" href="{{ asset('plugin/summernote/summernote-bs4.css') }}">
<link rel="stylesheet" href="{{ asset('plugin/sweetalert2/sweetalert2.css') }}">
<link rel="stylesheet" href="{{ asset('plugin/dataTables/datatables.css') }}">

<link rel="stylesheet" href="{{ asset('halaman/admin/galeri-foto/galeri-foto.styles.css') }}">
@endsection

@section('script')
<script src="{{ asset('plugin/summernote/summernote-bs4.js') }}"></script>
<script src="{{ asset('plugin/sweetalert2/sweetalert.min.js') }}"></script>
<script src="{{ asset('plugin/dataTables/datatables.js') }}"></script>

<script src="{{ asset('halaman/admin/galeri-foto/galeri-foto.js') }}"></script>
@endsection

@section('content')
<div class="mx-auto">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h2 class="card-title">Galeri Foto</h2>
                    <div class="card-tools">
                        <a id="tambah-foto" href="#" class="btn btn-success" data-toggle="modal"
                            data-target="#modal-galeri-foto">Tambah Foto</a>
                    </div>
                </div>

                <!-- /.card-header -->
                <div class="card-body table-responsive p-0">
                    <table class="table table-hover text-nowrap">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Judul</th>
                                <th>View</th>
                                <th>Data Dibuat</th>
                                <th>Data Terakhir Update</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody id="data-galeri-foto">
                            <tr>
                                <td>1</td>
                                <td>bla bla bla</td>
                                <td><img src="{{ asset('images-dummy/carousel/odong-odong.jpg') }}"></td>
                                <td>2020-01-20</td>
                                <td>2020-01-20</td>
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

<div class="modal fade" id="modal-galeri-foto" tabindex="-1" role="dialog" aria-labelledby="ModalLabel"
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
                            <span class="input-group-text">Judul</span>
                        </div>
                        <input name="judul_foto" id="judul_foto" type="text" class="form-control"
                            aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text">File Foto</span>
                        </div>
                        <div class="custom-file">
                            <input name="galeri-foto" type="file" class="custom-file-input" id="exampleInputFile">
                            <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                        </div>
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