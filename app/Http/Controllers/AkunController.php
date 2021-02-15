<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AkunController extends Controller {
    
    public function loginPage() {
        return view('admin/login-admin');
    }
}
