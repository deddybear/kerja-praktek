@extends('layouts/master-admin')

@section('title', 'Artikel Sekolah')

{{-- @section('content-title', 'Artikel Sekolah') --}}

@section('css')
<link rel="stylesheet" href="{{ asset('plugin/summernote/summernote.css') }}">
<link rel="stylesheet" href="{{ asset('plugin/sweetalert2/sweetalert2.css') }}">
<link rel="stylesheet" href="{{ asset('plugin/dataTables/datatables.css') }}">
@endsection

@section('script')
<script src="{{ asset('plugin/summernote/summernote.js') }}"></script>
<script src="{{ asset('plugin/sweetalert2/sweetalert.min.js') }}"></script>
<script src="{{ asset('plugin/dataTables/datatables.js') }}"></script>
<script src="{{ asset('halaman/admin/artikel/artikel.js') }}"></script>
@endsection

@section('content')
<div class="mx-auto">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h2 class="card-title">Panel Postigan</h2>
                    <div class="card-tools">
                        <a id="tambah-artikel" href="#" class="btn btn-success" data-toggle="modal"
                            data-target="#modal-artikel">Tambah Postingan</a>
                    </div>
                </div>
                <div class="card-body">
                    
                   <div class="table-responsive">
                        <table class="table table-hover text-nowrap" id="tableArtikel">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Postigan</th>
                                    <th>Postigan Untuk</th>
                                    <th>Data Dibuat</th>
                                    <th>Data Terakhir Update</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody id="data-artikel">
                            </tbody>
                        </table>
                   </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="modal-artikel" tabindex="-1" role="dialog" aria-labelledby="ModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-xl" >
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
                                    <span class="input-group-text">Judul Postingan</span>
                                </div>
                                <input name="judul_artikel" id="judul_artikel" type="text" class="form-control"
                                    aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" required>
                            </div>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">Jenis Postingan</span>
                                </div>
                                <select name="jenis_artikel" class="form-control" required>
                                    <option value="A1" selected>Artikel Sekolah</option>
                                    <option value="A2">Artikel Guru</option>
                                    <option value="A3">Artikel Siswa</option>
                                    <option value="P1">Info PPDB</option>
                                </select>
                            </div>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">Cover Postingan</span>
                                </div>
                                <div class="custom-file">
                                    <input name="cover_artikel" type="file" class="custom-file-input" required>
                                    <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                </div>
                            </div>
                        </div> 
                        <div class="col-7">
                            <textarea name="isi_artikel" id="summernote" required></textarea>
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