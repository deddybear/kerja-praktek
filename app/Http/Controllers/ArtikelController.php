<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArtikelController extends Controller
{
    public function guestPage()
    {
        return view('guest/artikel');
    }
}
