@extends('layouts/master')

@section('title', 'CK EDITOR')

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
    <h1>Halo</h1>

    <textarea name="content" id="content"></textarea>
@endsection