<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArtikelController extends Controller
{
    public function guestPage()
    {
        return view('guest/artikel');
    }

    //TODO : Halaman Admin

    public function masterArtikel()
    {
        return view('admin/artikel-sekolah');
    }
}
