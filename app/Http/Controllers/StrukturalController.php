<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StrukturalController extends Controller
{
    public function guestPage()
    {
        return view('guest/struktur-organisasi');
    }
}
