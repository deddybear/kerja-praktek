@extends('layouts/master')

@section('title', 'Welcome')

@section('css')
<link rel="stylesheet" href={{ asset('halaman/index/index.styles.css') }}>
@endsection

@section('content')
<div class="header my-5" style="padding: 50px 15px">
    <div class="container">
        <div class="col-lg-12 col-xl-10">
            <div class="row">
                <div class="header-text">
                    <h2>SD DIPONEGORO SURABAYA</h2>
                    <p>
                        <strong>JL. Kedung Sroko V No. 15 - 21, Tambaksari, Surabaya.<br>
                        Telepon 031-5124123 | 081124918724</strong>
                    </p>
                    <p>Pantang pulang sebelum khatam</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection