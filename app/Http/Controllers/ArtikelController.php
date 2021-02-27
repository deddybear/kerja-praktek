<?php

namespace App\Http\Controllers;

use App\Models\Artikel;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Storage;
use Ramsey\Uuid\Uuid as Generate;

class ArtikelController extends Controller
{
    public function guestPage()
    {
        return view('guest/artikel');
    }

    //TODO : Halaman Admin & Fungsional

    public function masterArtikel() {
        return view('admin/artikel-sekolah');
    }

    public function dataArtikel(){
        return json_encode(Artikel::all());
    }

    public function prosesSummernote($isiArtikel, $id){
       
        $dom = new \DOMDocument();
        $dom->loadHTML($isiArtikel, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);
        $imageList = $dom->getElementsByTagName('img');
        
        foreach ($imageList as $key => $image) {
            $data = $image->getAttribute('src');
            $fileName = $image->getAttribute('data-filename');
            if (preg_match('/data:image/', $data)) {
                list($type, $data) = explode(';', $data);
                list(, $data)      = explode(',', $data);
                $data = base64_decode($data);
                //error
                file_put_contents('images/artikel/'.$id.'/'.$fileName, $data);
                $image->removeAttribute('src');
                $image->setAttribute('src', '/images/artikel/'.$id.'/'.$fileName);
            }
            $isiArtikel = $dom->savehtml();
        }

        return $isiArtikel;
    }

    public function createArtikel(Request $request){

        $id       = Generate::uuid4();
        $path     = '/images/artikel/' . $id;
        $file     = $request->file('cover_artikel');
        $namaFile = $file->getClientOriginalName();

        $valid = Validator::make($request->all(), [
            'judul_artikel' => 'required|min:5|max:100|unique:tbl_artikel,nama_artikel',
            'jenis_artikel' => 'required|max:2|alpha_dash',
            'cover_artikel' => 'required|file|mimes:jpeg,png,jpg|max:1048',
            'isi_artikel'   => 'required|min:12'
        ]);

        if($valid->fails()){
            return response()->json(['validasi' => $valid->errors()->all()]);
        }

        if(Storage::putFileAs('public'.$path, $file, $namaFile)){
            $hasilProses = $this->prosesSummernote($request->isi_artikel, $id);
        
            $data = array (
                'id_artikel'     => $id,
                'id_ketentuan'   => $request->jenis_artikel,
                'nama_artikel'   => $request->judul_artikel,
                'sampul_artikel' => $path .'/'. $namaFile,
                'isi_artikel'    => $hasilProses,
                'slug'           => Str::slug($request->judul_artikel),
            );

            if (Artikel::create($data)) {

                return response()->json(['sukses' => "Berhasil Menambahkan Artikel Baru"]);
            
            } else {

                return response()->json(['gagal' => "Artikel gagal ditambahkan, mohon untuk dicoba/check lagi"]);
            }
            

        } else {
            return response()->json(['gagal' => "Artikel gagal ditambahkan, mohon untuk dicoba/check lagi"]);
        }

    }

    public function selectArtikel($id){
        return json_encode(Artikel::select('nama_artikel')->where('id_artikel', $id)->first());
    }

    public function editArtikel(Request $request, $id){
        
        $path     = '/images/artikel/' . $id;
        $file     = $request->file('cover_artikel');
        $namaFile = $file->getClientOriginalName();

        $valid = Validator::make($request->all(), [
            'judul_artikel' => 'required|min:5|max:100', Rule::unique('tbl_artikel', 'nama_artikel')->ignore($id),
            'jenis_artikel' => 'required|max:2|alpha_dash',
            'cover_artikel' => 'required|file|mimes:jpeg,png,jpg|max:1048',
            'isi_artikel'   => 'required|min:12'
        ]);

        if($valid->fails()){
            return response()->json(['validasi' => $valid->errors()->all()]);
        }

        if(Storage::exists('public'.$path)){
            Storage::deleteDirectory('public'.$path);
            Storage::putFileAs('public'.$path, $file, $namaFile);
            $hasilProses = $this->prosesSummernote($request->isi_artikel, $id);
            
        } else {
            Storage::putFileAs('public'.$path, $file, $namaFile);
            $hasilProses = $this->prosesSummernote($request->isi_artikel, $id);
        }

        $data = array (
            'id_ketentuan'   => $request->jenis_artikel,
            'nama_artikel'   => $request->judul_artikel,
            'sampul_artikel' => $path . '/' . $namaFile,
            'isi_artikel'    => $hasilProses,
            'slug'           => Str::slug($request->judul_artikel),
        );

        if (Artikel::where('id_artikel', $id)->update($data)) {

            return response()->json(['sukses' => "Berhasil Mengedit Artikel !"]);
        
        } else {

            return response()->json(['gagal' => "Artikel gagal ditambahkan, mohon untuk dicoba/check lagi"]);
        }
    }

    public function deleteArtikel($id) {
        $path = '/public/images/artikel/' . $id;
        if (Artikel::where('id_artikel', $id)->delete()) {
            if (Storage::exists($path)) {
                Storage::deleteDirectory($path);
                return response()->json(['sukses' => "File dan Data Artikel Berhasil dihapus"]);
            } else {
                return response()->json(['warning' => "Hanya Data Artikel Berhasil dihapus"]);
            }
        } else {
            return response()->json(['gagal' => "File dan Data Artikel GAGAL dihapus"]);
        }

        
    }

    
}
