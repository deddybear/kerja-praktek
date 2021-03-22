<?php

namespace App\Http\Controllers;

use App\Models\Galeri;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Ramsey\Uuid\Uuid as Generate;

class GaleriVideoController extends Controller
{
    public function guestPage(){
        $galerivideo = Galeri::orderBy('created_at')->where('id_ketentuan', 'G2')->get();

        return view('guest/galeri-video', compact('galerivideo'));
    }

    //TODO: Halaman admin dan fungsi

    public function masterVideo(){
        return view('admin/galeri-video');
    }

    public function dataVideo(){
        return json_encode(Galeri::all()->where('id_ketentuan', 'G2'));
    }

    public function embedLinkVideo(Request $request){
        
        $valid = Validator::make($request->all(), [
            'judul_video' => 'required|between:5,50',
            'link_embed'  => 'required|max:255'
        ]);
        
        if($valid->fails()){
            return response()->json(['validasi' => $valid->errors()->all()]);
        }

        $data = array(
            'id_galeri'    => Generate::uuid4(),
            'id_ketentuan' => 'G2',
            'judul'        => $request->judul_video,
            'source'       => $request->link_embed
        );

        if (Galeri::create($data)) {
            return response()->json(['sukses' => "Berhasil Embed Link Video"]);
        } else {
            return response()->json(['gagal' => "Gagal Embed Link Video"]);
        }
        

    }

    public function selectLinkVideo($id){
        return json_encode(Galeri::select('judul', 'source')->where('id_galeri', $id)->first());
    }

    public function editLinkVideo(Request $request, $id){

        $valid = Validator::make($request->all(), [
            'judul_video' => 'required|between:5,30',
            'link_embed'  => 'required|max:255'
        ]);
        
        if($valid->fails()){
            return response()->json(['validasi' => $valid->errors()->all()]);
        }

        $data = array(
            'judul'        => $request->judul_video,
            'source'       => $request->link_embed
        );

        if (Galeri::where('id_galeri', $id)->update($data)) {
            return response()->json(['sukses' => "Berhasil Mengedit Embed Link Video"]);
        } else {
            return response()->json(['gagal' => "Gagal Mengedit Embed Link Video"]);
        }
    }

    public function deleteLinkVideo($id){
        if(Galeri::where('id_galeri', $id)->delete()){
            return response()->json(['sukses' => "Berhasil Menghapus Embed Link Video"]);
        }
        return response()->json(['gagal' => "Gagal Menghapus Embed Link Video"]);
    }
}
