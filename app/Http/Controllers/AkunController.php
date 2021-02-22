<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AkunController extends Controller {


    public function settingAkun(){
        return view('admin/edit-akun');
    }
}
