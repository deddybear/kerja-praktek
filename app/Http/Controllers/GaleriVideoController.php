<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GaleriVideoController extends Controller
{
    public function guestPage(){
        return view('guest/galeri-video');
    }

    //TODO: Halaman admin dan fungsi

    public function masterVideo(){
        # code...
    }

    public function dataVideo(){
        # code...
    }

    public function embedLinkVideo(Request $request){
        # code...
    }

    public function selectLinkVideo($id){
        # code...
    }

    public function editLinkVideo(Request $request, $id){
        # code...
    }

    public function deleteLinkVideo($id){
        # code...
    }
}
