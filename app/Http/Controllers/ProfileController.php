<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller {
    
    public function guestPage(){
        return view('guest/profil');  
    }

    // TODO : Halaman Admin & Fungsional

    public function masterProfile(){
        return view('admin/profil-sekolah');
    }

    
}
