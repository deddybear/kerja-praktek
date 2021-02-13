@extends('layouts/master')

@section('title', 'Galeri Video')
    
@section('css')
    
@endsection

@section('script')
    
@endsection


@section('content')
    <div class="row">
        @for ($i = 0; $i < 5; $i++)
            <div class="card m-3" style="width: 18rem;">
                <img src="{{ asset('images/test-dev/gambar1.jpeg') }}" class="card-img-top" alt="...">
                
              </div>
          @endfor
    </div>    
@endsection