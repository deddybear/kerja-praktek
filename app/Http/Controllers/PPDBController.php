<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PPDBController extends Controller
{
    
    public function guestPage(){
        return view('guest/pendaftaran');
    }

    public function ppdbPage()
    {
        return view('guest/ppdb');
    }

}