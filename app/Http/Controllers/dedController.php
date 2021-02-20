<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class dedController extends Controller
{
    public function ckeditor(){
        return view('dev-test/halaman-test');
    }

    public function postArtikel(Request $request){
        dd($request);
    }

    public function test()
    {
        return Storage::exists('public/images/artikel');
    }
}
