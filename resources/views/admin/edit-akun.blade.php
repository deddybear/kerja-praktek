@extends('layouts/master-admin')

@section('title', 'Edit Akun')

@section('content-title', 'Edit Akun')

@section('css')
<link rel="stylesheet" href="{{ asset('halaman/admin/edit-akun/edit-akun.styles.css') }}">
@endsection

@section('content')
<div class="container">
    <div class="col-6">
        <form action="seeting" method="get">
            <div class="form-group">
                <label for="namalengkap">Nama</label>
                <input type="text" class="form-control" id="namalengkap" placeholder="Nama Lengkap">
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="tempatlahir">Tempat Lahir</label>
                    <input type="text" class="form-control" id="tempatlahir" placeholder="Tempat Lahir">
                </div>
                <div class="form-group col-md-6">
                    <label for="tanggallahir">Tanggal Lahir</label>
                    <input type="date" class="form-control" id="tanggallahir" placeholder="Tanggal Lahir">
                </div>
            </div>
            <div class="form-group">
                <label for="inputAddress">Alamat</label>
                <input type="text" class="form-control" id="alamat" placeholder="Alamat">
            </div>
            <div class="form-group">
                <label for="inputAddress">Asal Sekolah</label>
                <input type="text" class="form-control" id="asalsekolah" placeholder="Asal Sekolah">
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputCity">City</label>
                    <input type="text" class="form-control" id="inputCity">
                </div>
                <div class="form-group col-md-4">
                    <label for="inputState">State</label>
                    <select id="inputState" class="form-control">
                        <option selected>Choose...</option>
                        <option>...</option>
                    </select>
                </div>
                <div class="form-group col-md-2">
                    <label for="inputZip">Zip</label>
                    <input type="text" class="form-control" id="inputZip">
                </div>
            </div>
            <div class="form-group">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="gridCheck">
                    <label class="form-check-label" for="gridCheck">
                        Check me out
                    </label>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Sign in</button>
        </form>
    </div>
</div>
@endsection