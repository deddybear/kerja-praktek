<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profile;

class ProfileController extends Controller {
    
    public function guestPage(){
        return view('guest/profil');  
    }

    // TODO : Halaman Admin & Fungsional

    public function masterProfile(){
        return view('admin/profil-sekolah');
    }

    public function dataProfile(){
        return json_encode(Profile::with(['prestasi', 'fasilitas'])->get());
    }


}
