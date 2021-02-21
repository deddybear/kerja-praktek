<?php

namespace App\Http\Controllers;

use App\Models\Frist as Frist;
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

    public function test1(){
        $data = Frist::select('*')->with('last_name')->get();
        return view('test', compact('data'));
    }

    public function select(){
        $data = Frist::select('*')->where('id', 2)->with('last_name')->first();
        return $data;
    }
}
