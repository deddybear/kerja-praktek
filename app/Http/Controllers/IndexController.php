<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller {
    
    public function guestPage() {
        return view('guest/index');
    }

    public function adminPage()
    {
        return view('admin/test');
    }
}
