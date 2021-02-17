@extends('layouts/master-admin')

@section('title', 'Artikel Sekolah')

@section('content-title', 'Artikel Sekolah')

@section('content')
<div class='m-1'>
    <h1>Tabel Gan</h1>
</div>
<div class="container m-1">
    <div class="row">
        <a id="tombol-tambah" class="col-3 mx-1 btn btn-success" href="javascript:;" data-bs-toggle="modal"
            data-bs-target="#modal-coba">Tambah Data</a>
    </div>
</div>
<div class="m-1">
    <table id="tabel" class="table table-dark table-striped">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>Umur</th>
                <th>Status User</th>
                <th>Data Dibuat</th>
                <th>Data Terakhir Update</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody id="gege">
        </tbody>
    </table>
</div>
@endsection