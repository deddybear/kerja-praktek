<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class halamanController extends Controller
{
    public function IndexPage()
    {
        return view('index');
    }
}
