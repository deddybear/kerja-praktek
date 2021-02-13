@extends('layouts/master')

@section('title', 'Galeri Foto')
    
@section('css')
    
@endsection

@section('script')
    
@endsection


@section('content')
<div class="row">
    @for ($i = 0; $i < 5; $i++)
        <div class="card m-3" style="width: 18rem;">
            <img src="{{ asset('images/test-dev/gambar1.jpeg') }}" class="card-img-top" alt="...">
            <div class="card-body">
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
          </div>
        @endfor
</div>  
@endsection