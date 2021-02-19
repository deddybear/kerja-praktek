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
        $valid = Validator::make($request->all(), [
            'judul_artikel' => 'required|min:5|max:100|unique:tbl_artikel,nama_artikel',
            'jenis_artikel' => 'required|max:2|alpha_dash',
            'cover_artikel' => 'file|mimes:jpeg,png,jpg|max:1048',
            'isi_artikel'   => 'required'
        ]);

        if($valid->fails()){
            return response()->json(['errors' => $valid->errors()->all()]);
        }

        if ($request->jenis_artikel == 'A1') {
            $path = '/public/images/artikel/sekolah/'.$id;
        } elseif ($request->jenis_artikel == 'A2') {
            $path = '/public/images/artikel/guru/'.$id;
        } else {
            $path = '/public/images/artikel/siswa/'.$id;
        }

        if( $link = Storage::putFile($path, $request->file('cover_artikel')) ){
            
            $dom = new \DOMDocument();
            $dom->loadHTML($request->isi_artikel, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);
            $imageList = $dom->getElementsByTagName('img');
            
            foreach ($imageList as $key => $image) {
                $data = $image->getAttribute('src');
                $fileName = $image->getAttribute('data-filename');
                if (preg_match('/data:image/', $data)) {
                    list($type, $data) = explode(';', $data);
                    list(, $data)      = explode(',', $data);
                    $data = base64_decode($data);

                    //error
                    file_put_contents(asset($path.'/'.$fileName), $data);

                    $image->removeAttribute('src');
                    $image->setAttribute('src', '/'.$path.$fileName);
                }

                $isiArtikel = $dom->savehtml();
            }
        
            $data = array (
                'id_artikel'     => $id,
                'id_ketentuan'   => $request->jenis_artikel,
                'nama_artikel'   => $request->judul_artikel,
                'sampul_artikel' => $request->$link,
                'isi_artikel'    => $request->$isiArtikel,
                'slug'           => Str::slug($request->judul_artikel),
            );

            return response()->json(['sukses' => 'Data berhasil diupload']);

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
