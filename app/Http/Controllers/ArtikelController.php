<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Ramsey\Uuid\Uuid as Generate;

class ArtikelController extends Controller
{
    public function guestPage()
    {
        return view('guest/artikel');
    }

    //TODO : Halaman Admin

    public function masterArtikel() {
        return view('admin/artikel-sekolah');
    }

    public function createArtikel(Request $request){
        $data = array (
            'id' => Generate::uuid4(),
            'judul_artikel' => $request->judul_artikel,
            'jenis_artikel' => $request->jenis_artikel,
            'cover_artikel' => $request->cover_artikel,
            'isi_artikel'   => $request->isi_artikel
        );
        return json_encode($data);
    }

    public function selectArtikel($id){
        # code...
    }

    public function editArtikel(Request $request){
        $data = array (
            'id' => Generate::uuid4(),
            'judul_artikel' => $request->judul_artikel,
            'jenis_artikel' => $request->jenis_artikel,
            'cover_artikel' => $request->cover_artikel,
            'isi_artikel'   => $request->isi_artikel
        );
        return json_encode($data);
    }
}
