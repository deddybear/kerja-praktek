@extends('layouts/master')

@section('title', 'CK EDITOR')

@section('css')
    <link rel="stylesheet" href="{{ asset('test.css') }}">
@endsection

@section('script')
    <script src="{{ asset('plugin/ckeditor/ckeditor.js') }}"></script>
    <script>
    CKEDITOR.replace('content', {
        filebrowserUploadUrl: "{{route('wildan', ['_token' => csrf_token() ])}}",
        filebrowserUploadMethod: 'form'
    });
    </script>
@endsection

@section('content')
   <div class="kotak-360 mb-2"  style="width: 100px; height: 100px;" ></div>
   <div class="kotak-768 mb-2"  style="width: 100px; height: 100px;" ></div>
   <div class="kotak-1000 mb-2" style="width: 100px; height: 100px;" ></div>
@endsection