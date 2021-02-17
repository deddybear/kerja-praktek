@extends('layouts/master-admin')

@section('title', 'Artikel Sekolah')

@section('content-title', 'Artikel Sekolah')

@section('css')
<link rel="stylesheet" href="{{ asset('summernote/summernote-bs4.css') }}">
<link rel="stylesheet" href="{{ asset('sweetalert2/sweetalert2.css') }}">
@endsection

@section('script')
<script src="{{ asset('summernote/summernote-bs4.js') }}"></script>
<script src="{{ asset('sweetalert2/sweetalert.min.js') }}"></script>

<script src="{{ asset('halaman/artikel/artikel.js') }}"></script>
@endsection

@section('content')
<div class="mx-auto">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title"></h3>
                    <div class="card-tools">
                        <a id="tambah-artikel" href="#" class="btn btn-success" data-toggle="modal"
                            data-target="#modal-artikel">Tambah Artikel</a>
                    </div>
                </div>

                <!-- /.card-header -->
                <div class="card-body table-responsive p-0">
                    <table class="table table-hover text-nowrap">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Artikel</th>
                                <th>Artikel Untuk</th>
                                <th>Data Dibuat</th>
                                <th>Data Terakhir Update</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody id="data-artikel">
                            <tr>
                                <td>1</td>
                                <td>bla bla bla</td>
                                <td>Sekolah</td>
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

<div class="modal fade" id="modal-artikel" tabindex="-1" role="dialog" aria-labelledby="ModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" style="max-width: 1000px !important">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <form method="post" id="form">
                <div class="modal-body">
                    <div class="row">     
                        <div class="col-5">                
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">Judul Artikel</span>
                                </div>
                                <input name="judul_artikel" id="judul_artikel" type="text" class="form-control"
                                    aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                            </div>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">Jenis Artikel</span>
                                </div>
                                <select name="jenis_artikel" class="form-control">
                                    <option selected>Artikel Sekolah</option>
                                    <option>Artikel Siswa</option>
                                    <option>Artikel Guru</option>
                                </select>
                            </div>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">Cover Artikel</span>
                                </div>
                                <div class="custom-file">
                                    <input name="cover_artikel" type="file" class="custom-file-input" id="exampleInputFile">
                                    <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                </div>
                            </div>
                        </div> 
                        <div class="col-7">
                            <textarea id="summernote" ></textarea>
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