<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class dedController extends Controller
{
    public function ckeditor(){
        return view('dev-test/halaman-test');
    }

    public function postArtikel(Request $request){
        dd($request);
    }
}
