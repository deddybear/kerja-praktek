@extends('layouts/master-admin')

@section('title', 'Artikel Sekolah')

@section('content-title', 'Artikel Sekolah')

@section('script')
<script src="{{ asset('halaman/artikel/artikel.js') }}"></script>
    
@endsection

@section('content')
<div class="mx-auto">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Title</h3>
                    <div class="card-tools">
                        <a id="tambah-data" href="#" class="btn btn-success" data-toggle="modal" data-target="#modal-artikel">Tambah Data</a>
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
                        <tbody id="artikel">
                            <tr>
                                <td>1</td>
                                <td>bla bla bla</td>
                                <td>Sekolah</td>
                                <td>2020-01-20</td>
                                <td>2020-01-20</td>
                                <td>
                                    <a href="javascript:;" id="tombol-edit" class="btn btn-info" data="'+ row.id_users+'" > Edit Data</a>
                                    <a href="javascript:;" id="tombol-hapus" class="btn btn-warning" data="'+ row.id_users+'" > Hapus Data</a>
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
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Artikel</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <form method="post" id="form">
                <div class="modal-body">
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="inputGroup-sizing-default">Nama</span>
                        <input name="nama" id="nama" type="text" class="form-control" aria-label="Sizing example input"
                            aria-describedby="inputGroup-sizing-default">
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="inputGroup-sizing-default">Alamat</span>
                        <input name="alamat" id="alamat" type="text" class="form-control"
                            aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="inputGroup-sizing-default">Umur</span>
                        <input name="umur" id="umur" type="number" min="10" max="100" class="form-control"
                            aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                    </div>
                    <div class="input-group mb-3" id='input-status'>
                        <span class="input-group-text" id="inputGroup-sizing-default">Status</span>
                        <input name="status" id="status" type="number" min="0" max="1" class="form-control"
                            aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
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