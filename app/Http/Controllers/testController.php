<?php

namespace App\Http\Controllers;

use App\Models\Frist as Frist;
use Illuminate\Http\Request;


//TODO : Gawe test test an
class testController extends Controller {

    public function test(){
        $data = Frist::select('*')->with('last_name')->get();
        return view('test', compact('data'));
    }

    public function select(){
        $data = Frist::select('*')->where('id', 2)->with('last_name')->first();
        return $data;
    }

    public function ppdbAdmin()
    {
        return view('admin/pengumuman-ppdb');
    }

    public function galeriFoto()
    {
        return view('admin/galeri-foto');
    }

    public function galeriVideo()
    {
        return view('admin/galeri-video');
    }
    
    public function ckeditor(){
        return view('dev-test/halaman-test');
    }

    public function postArtikel(Request $request){
        dd($request);
    }
}
