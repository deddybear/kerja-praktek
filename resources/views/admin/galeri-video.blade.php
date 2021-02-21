@extends('layouts/master-admin')

@section('title', 'Galeri Video')

@section('css')
<link rel="stylesheet" href="{{ asset('plugin/sweetalert2/sweetalert2.css') }}">
<link rel="stylesheet" href="{{ asset('plugin/dataTables/datatables.css') }}">
<link rel="stylesheet" href="{{ asset('halaman/admin/galeri-video/galeri-video.styles.css') }}">
@endsection

@section('script')
<script src="{{ asset('plugin/sweetalert2/sweetalert.min.js') }}"></script>
<script src="{{ asset('plugin/dataTables/datatables.js') }}"></script>
<script src="{{ asset('halaman/admin/galeri-video/galeri-video.js') }}"></script>
@endsection

@section('content')
<div class="mx-auto">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h2 class="card-title">Galeri Video</h2>
                    <div class="card-tools">
                        <a id="tambah-video" href="#" class="btn btn-success" data-toggle="modal"
                            data-target="#modal-galeri-video">Tambah Video</a>
                    </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <div class="table-responsive p-0">
                        <table class="table table-hover text-nowrap" id="tableGaleri">
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
                            <tbody id="data-galeri-video">
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="modal-galeri-video" tabindex="-1" role="dialog" aria-labelledby="ModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title"></h5>
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
                        <input name="judul_video" id="judul_video" type="text" class="form-control"
                            aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                    </div>
                    <div class="form-group">
                        <label for="label-textArea">Link Embed</label>
                        <textarea name="link_embed" id="link_video" class="form-control" id="label-textArea" rows="3"></textarea>
                      </div>
                    <span>
                        <a href="#" data-toggle="modal" data-target="#modal-tutor"> Cara Mendapatakan Link Embed</a>
                    </span>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" id="tombol-submit" class="btn btn-primary"></button>
                </div>
            </form>
        </div>
    </div>
</div>

<div class="modal fade" id="modal-tutor" tabindex="-1" role="dialog" aria-labelledby="ModalLabel"
aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="title">Cara Mendapatkan Link Embed di youtube</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                Isiii tutorial mendapatkan link embed dyucub
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

</div>
@endsection