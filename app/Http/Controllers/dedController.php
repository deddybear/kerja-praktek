<?php

namespace App\Http\Controllers;

use App\Models\Pendaftaran;
use App\Models\Frist as Frist;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Ramsey\Uuid\Uuid as Generate;

class dedController extends Controller
{
    
    public function id(){
        return Pendaftaran::select('*')->with(['ibu', 'ayah', 'peserta', 'peserta.beasiswa' ])->get();
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

    public function check(Request $request){
       dd($request);
    }
}
