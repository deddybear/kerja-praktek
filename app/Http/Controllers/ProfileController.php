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

    public function editProfile(Request $request){
        return json_encode($request->isi_teks_profile);
    }

    public function editVisiMisi(Request $request){
        return json_encode($request->isi_teks_vm);
    }
}
