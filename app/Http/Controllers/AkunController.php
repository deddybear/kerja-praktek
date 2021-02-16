<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AkunController extends Controller {

    public function loginPage() {
        return view('admin/login-admin');
    }

    public function daftar(Request $request){
        $request->validate([
            'namalengkap'     => 'required|alpha_dash|max:30',
            'username'        => 'required|between:5,15|string|unique:tbl_akun,username',
            'email'           => 'required|email|max:40',
            'password'        => 'required|between:8,17|string',
            'confirmpassword' => 'required|between:8,17|confirmed'
        ]);
        
        
    }
   
    public function lupaPassword(Request $request){
        dd($request);
    }

    public function masuk(Request $request){
        $request->validate([
            'email'    => 'required|email|max:40',
            'password' => 'required|between:8,17'
        ]);
        dd('Hore Masuk');
    }
}
