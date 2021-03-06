<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PPDBController extends Controller
{
    
    public function pendaftaranPage() {
        return view('guest/pendaftaran');
    }

    public function pengumumanPage() {
        return view('guest/pengumuman-ppdb');
    }

    public function daftarPesertaDidik(Request $request) {

        if ($request->jenis_prestasi1) {
            dd('ada isi '. $request->jenis_prestasi1);
        } else {
            dd('tidak ada isi');
        }

        $valid = Validator::make($request->all(), [
            'jarak_tempat' => 'required'
        ]);

        if ($valid->fails()) {
                dump('tidak boleh kosong');
        }
    }
}
