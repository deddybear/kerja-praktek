<?php

namespace App\Http\Controllers;
use App\Models\Galeri;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;
use Ramsey\Uuid\Uuid as Generate;

class GaleriFotoController extends Controller
{
    
    public function guestPage(){
        $galerifoto = Galeri::orderBy('created_at')->where('id_ketentuan', 'G1')->get();

        return view('guest/galeri-foto', ['galerifoto' => $galerifoto]);
    }

    //TODO : Halaman Admin dan fungsi

    public function masterFoto(){
        return view('admin/galeri-foto');
    }

    public function dataFoto(){
        return json_encode(Galeri::all()->where('id_ketentuan', 'G1'));
    }

    public function uploadFoto(Request $request){

        $valid = Validator::make($request->all(), [
            'judul_foto'  => 'required|between:5,30',
            'galeri-foto' => 'required|file|mimes:jpeg,png,jpg|max:1048',
        ]);

        if($valid->fails()){
            return response()->json(['validasi' => $valid->errors()->all()]);
        }

        $id       = Generate::uuid4();
        $path     = '/images/galeri/' . $id;
        $file     = $request->file('galeri-foto');
        $namaFile = str_replace(" ", "-", $file->getClientOriginalName());

        if (Storage::putFileAs('public'.$path, $file, $namaFile)) {
            $data = array(
                'id_galeri'    => $id,
                'id_ketentuan' => 'G1',
                'judul'        => $request->judul_foto,
                'source'       => $path .'/'. $namaFile
            );

            if (Galeri::create($data)) {
                return response()->json(['sukses' => "Berhasil Upload Foto"]);
            } else {
                return response()->json(['gagal' => "Gagal Upload Foto"]);
            }
        } else {
            return response()->json(['gagal' => "Gagal Upload Foto"]);
        }
    }

    public function selectDataFoto($id){
        return json_encode(Galeri::select('judul')->where('id_galeri', $id)->first());
    }

    public function editDataFoto(Request $request, $id){

        $valid = Validator::make($request->all(), [
            'judul_foto'  => 'required|between:5,30',
            'galeri-foto' => 'required|file|mimes:jpeg,png,jpg|max:1048',
        ]);

        if($valid->fails()){
            return response()->json(['validasi' => $valid->errors()->all()]);
        }

        $path     = '/images/galeri/' . $id;
        $file     = $request->file('galeri-foto');
        $namaFile = str_replace(" ", "-", $file->getClientOriginalName());

        if(Storage::exists('public'.$path)){
            Storage::deleteDirectory('public'.$path);
            Storage::putFileAs('public'.$path, $file, $namaFile);
        } else {
            Storage::putFileAs('public'.$path, $file, $namaFile);
        }

        $data = array(
            'id_ketentuan' => 'G1',
            'judul'        => $request->judul_foto,
            'source'       => $path .'/'. $namaFile
        );

        if(Galeri::where('id_galeri', $id)->update($data)){
            
            return response()->json(['sukses' => "Berhasil Mengedit Data Foto!"]);
        
        } else {
            
            return response()->json(['gagal' => "Data Foto gagal ditambahkan, mohon untuk dicoba/check lagi"]);
        
        }
    }

    public function deleteDataFoto($id){

        $path     = 'public/images/galeri/' . $id;
        if(Galeri::where('id_galeri', $id)->delete()){
            if(Storage::exists($path)){
                Storage::deleteDirectory($path);
                return response()->json(['sukses' => "File dan Data Foto Berhasil dihapus"]);
            } else {
                return response()->json(['warning' => "Hanya Data Foto Berhasil dihapus"]);
            }

        } else {
            return response()->json(['gagal' => "File dan Data Foto GAGAL dihapus"]);
        }
    }
}
