<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GaleriVideoController extends Controller
{
    public function guestPage(){
        return view('guest/galeri-video');
    }
}
