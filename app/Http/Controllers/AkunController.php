<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class AkunController extends Controller {

    public function settingAkunPage(){
        return view('admin/edit-akun');
    }

    public function ubahNama(Request $request){

        $request->validate([
            'nama_akun' => 'required|string|between:5,50'
        ]);
        
        
    }
    
    public function ubahUsername(Request $request){
        $request->validate([
            'username' => 'required|string|between:5,15', Rule::unique('tbl_akun', 'username')->ignore(Auth::id())
        ]);
    }

    public function gantiPassword(Request $request){
        $request->validate([
            'password' => 'required|string|between:8,17|confirmed'
        ]);
    }

    public function ubahEmail(Request $request){
        $request->validate([
            'email' => 'required|email|max:40', Rule::unique('tbl_akun', 'email')->ignore(Auth::id())
        ]);
    }
}
