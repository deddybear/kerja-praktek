<?php

namespace App\Http\Controllers;

use App\Models\Fasilitas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Profile;

class ProfileController extends Controller {
    
    public function guestPage(){
        $data = Profile::with(['prestasi', 'fasilitas'])->get();
        return view('guest/profil', ['data' => $data]);  
    }

    // TODO : Halaman Admin & Fungsional

    public function masterProfile(){
        return view('admin/profil-sekolah');
    }

    public function dataProfile(){
        return json_encode(Profile::with(['prestasi', 'fasilitas'])->get());
    }

    public function editProfile(Request $request) {

        $valid = Validator::make($request->all(), [
            'isi_teks_profile' => 'required|min:15'
        ]);

        if ($valid->fails()) {
            return response()->json(['validasi' => $valid->errors()->all()]);
        }

        $data = array(
            'isi_profile' => $request->isi_teks_profile
        );

        if (Profile::where('id_profile', '0112ccb6-4bc4-445f-914d-6b3c50bec461')->update($data) ) {

            return response()->json(['sukses' => "Berhasil Mengedit Profile Sekolah"]);
        }

        return response()->json(['gagal' => "Gagal Mengedit Profile Sekolah"]);
        
    }

    public function editVisiMisi(Request $request) {
        
        $valid = Validator::make($request->all(), [
            'isi_teks_vm' => 'required|min:15'
        ]);

        if ($valid->fails()) {
            return response()->json(['validasi' => $valid->errors()->all()]);
        }

        $data = array(
            'visi_misi' => $request->isi_teks_vm
        );

        if (Profile::where('id_profile', '0112ccb6-4bc4-445f-914d-6b3c50bec461')->update($data)) {
         
            return response()->json(['sukses' => "Berhasil Mengedit Profile Sekolah"]);
        
        }

        return response()->json(['gagal' => "Gagal Mengedit Profile Sekolah"]);
    }

    
}
