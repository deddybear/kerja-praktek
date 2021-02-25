<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PPDBController extends Controller
{
    
    public function pendaftaranPage() {
        return view('guest/pendaftaran');
    }

    public function pengumumanPage() {
        return view('guest/pengumuman-ppdb');
    }

}
