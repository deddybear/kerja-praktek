@extends('layouts/master')

@section('title', 'Struktur Organisasi')

@section('css')
<link rel="stylesheet" href="{{ asset('halaman/guest/index/index.styles.css') }}">
@endsection

@section('content')
<div class="container">
    <div class="shadow p-3 bg-white rounded">
        <section class="after-carousel">
            <section class="announcement-section">
                    <section class="announcement-section-title">
                    <h4>
                        <i class="fa fa-user"></i>
                        <strong>SAMBUTAN</strong>

                    </h4>
                </section>
                <div class="container">
                    <div class="announcement-list">
                        <table class="table">
                            <tbody>
                                <tr>
                                    <td>No</td>
                                    <td>Nama</td>
                                    <td>Jabatan</td>
                                </tr>
                                <tr>
                                    <td>1</td>
                                    <td>Dedi</td>
                                    <td>Kepala Sekolah</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </section>
        </section>
    </div>

</div>

@endsection