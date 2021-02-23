@extends('layouts/master')

@section('css')
<link rel="stylesheet" href={{ asset('halaman/hai/hai.styles.css') }}>
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Hanalei&family=Raleway:ital,wght@0,700;1,400&display=swap" rel="stylesheet"> 

<style>
    .coba_text {
        font-family: 'Hanalei', cursive;
    
    }
</style>
@endsection

@section('script')
<script src="{{ asset('halaman/hai/hai.js') }}"></script>
@endsection

@section('wildan')


<div class='m-3'>
    <a id="tombol" href="javascript:;" class="btn btn-primary">
        <i class="fab fa-battle-net"></i>
        Pencet Aku
    </a>
</div>
<div class="container" id="baa">
    <div class="row">

        <div class="col-sm biru text-center" id="div1">
            Kotak 1
        </div>

        <div class="col-2 pink text-center" id="div2">
            Kotak 2
        </div>

        <div class="col-sm kuning text-center" id="div3">
            Kotak 3
        </div>
    </div>

    <div class="" id='show_data'>

    </div>

    <div class="container m-5">
        <div class="row">
            <div class="col-6">
                <div class="kotak"></div>
            </div>
            <div class="col-6">
                <img src="{{ asset('images/computer.png') }}" class="img_komp" >
            </div>
        </div>

        <h4 class="coba_text m-5">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid sunt consectetur quam ut doloribus
            voluptate, ullam deleniti perferendis a voluptatum nihil, porro eveniet accusantium! Laudantium illum
            perferendis quasi eius blanditiis!
        </h4>
        {{-- lokal
        <img src="{{ asset('namafolder/namafile.extensi') }}" >

        {{-- internet --}}
        {{-- <img src="url-dari-internet"> --}} 
    </div>
</div>
@endsection