<?php

namespace App\Http\Controllers;

use App\Models\Artikel;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use Ramsey\Uuid\Uuid as Generate;

class ArtikelController extends Controller
{
    public function guestPage()
    {
        return view('guest/artikel');
    }

    //TODO : Halaman Admin

    public function masterArtikel() {
        return view('admin/artikel-sekolah');
    }

    public function dataArtikel(){
        return json_encode(Artikel::all());
    }

    public function createArtikel(Request $request){

        $id = Generate::uuid4();
        $path = '/public/images/artikel/' . $id;
        $valid = Validator::make($request->all(), [
            'judul_artikel' => 'required|min:5|max:100|unique:tbl_artikel,nama_artikel',
            'jenis_artikel' => 'required|max:2|alpha_dash',
            'cover_artikel' => 'required|file|mimes:jpeg,png,jpg|max:1048',
            'isi_artikel'   => 'required|min:12'
        ]);

        if($valid->fails()){
            return response()->json(['validasi' => $valid->errors()->all()]);
        }

        if( $link = Storage::putFile($path, $request->file('cover_artikel')) ){
            $isiArtikel = $request->isi_artikel;
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
        
            $data = array (
                'id_artikel'     => $id,
                'id_ketentuan'   => $request->jenis_artikel,
                'nama_artikel'   => $request->judul_artikel,
                'sampul_artikel' => $link,
                'isi_artikel'    => $isiArtikel,
                'slug'           => Str::slug($request->judul_artikel),
            );

            if (Artikel::create($data)) {

                return response()->json(['sukses' => $data]);
            
            } else {

                return response()->json(['gagal' => "Artikel gagal ditambahkan, mohon untuk dicoba/check lagi"]);
            }
            

        }

    }

    public function selectArtikel($id){
        # code...
    }

    public function editArtikel(Request $request){
        $data = array (
            'id' => Generate::uuid4(),
            'judul_artikel' => $request->judul_artikel,
            'jenis_artikel' => $request->jenis_artikel,
            'cover_artikel' => $request->cover_artikel,
            'isi_artikel'   => $request->isi_artikel
        );
        return json_encode($data);
    }
}
