<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Ramsey\Uuid\Uuid as Generate;


class AkunController extends Controller {

    public function loginPage() {
        return view('admin/login-admin');
    }

    public function daftar(Request $request){
        $request->validate([
            'namalengkap'     => 'required|alpha_dash',
            'username'        => 'required|between:5,15|string|unique:tbl_akun,username',
            'email'           => 'required|email|max:40',
            'password'        => 'required|between:8,17|string',
            'confirmpassword' => 'required|between:8,17|confirmed'
        ]);
   
        dd('Hore');
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
