<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;


//TODO : Gawe test test an
class junController extends Controller {

    

    public function ppdbAdmin()
    {
        return view('admin/pengumuman-ppdb');
    }
    
    public function dataSiswa()
    {
        return view('admin/data-siswa');
    }

    public function dataPendaftar()
    {
        return view('admin/data-pendaftar');    
    }

    public function settingAkun()
    {
        return view('admin/setting');
    }
}
