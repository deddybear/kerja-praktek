<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;


//TODO : Gawe test test an
class junController extends Controller {

    

    public function daftarSukses()
    {
        return view('guest/pendaftaran-sukses');
    }
    
    public function daftarGagal()
    {
        return view('guest/pendaftaran-gagal');
    }

    public function dataSiswa()
    {
        return view('admin/data-siswa');
    }

    public function dataPendaftar()
    {
        return view('admin/data-pendaftar');    
    }

}
