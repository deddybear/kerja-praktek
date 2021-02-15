<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AkunController extends Controller {
    
    public function loginPage() {
        return view('admin/login-admin');
    }

    public function daftar(Request $request){
        dd($request);
    }
   
    public function lupaPassword(Request $request){
        dd($request);
    }

    public function masuk(Request $request){
        dd($request);
    }
}
