<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GaleriFotoController extends Controller
{
    
    public function guestPage(){
        return view('guest/galeri-foto');
    }

}
