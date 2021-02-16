<?php

namespace App\Http\Controllers;

use App\Models\Frist as Frist;
use Illuminate\Http\Request;


//TODO : Gawe test test an
class testController extends Controller {
    
    public function __construct() {
        $this->middleware(['auth','verified']);
    }


    public function test(){
        $data = Frist::select('*')->with('last_name')->get();
        return view('test', compact('data'));
    }

    public function select(){
        $data = Frist::select('*')->where('id', 2)->with('last_name')->first();
        return $data;
    }

    public function dashboard(){
        return view('admin/coba');
    }
}
