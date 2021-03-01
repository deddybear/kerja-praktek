<?php

namespace App\Http\Controllers;

use App\Models\Fasilitas;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Ramsey\Uuid\Uuid as Generate;

class FasilitasController extends Controller {
    
    public function selectData($id){
        return json_encode(Fasilitas::select('nama', 'jumlah')->where('id_fasilitas', $id)->first());
    }

    public function tambahData(Request $request){
        
        $valid = Validator::make($request->all(),[
            'jenis_fasilitas' => 'required|max:10|alpha',
            'nama_fasilitas'  => 'required|between:2,50|string',
            'jumlah_fasilitas'=> 'required|alpha_num'
        ]);

        if ($valid->fails()) {
            return response()->json(['validasi' => $valid->errors()->all()]);
        }

        $data = array(
            'id_fasilitas' => Generate::uuid4(),
            'id_profile'   => '0112ccb6-4bc4-445f-914d-6b3c50bec461',
            'jenis'        => $request->jenis_fasilitas,
            'nama'         => $request->nama_fasilitas,
            'jumlah'       => $request->jumlah_fasilitas
        );
        
        if(Fasilitas::create($data)) {
            
            return response()->json(['sukses' => "Berhasil Menambahkan Data Fasilitas"]);
        
        }

        return response()->json(['gagal' => "Gagal Menambahkan Data Baru, mohon untuk dicoba/check lagi"]);
    }

    public function editData(Request $request, $id) {

        $valid = Validator::make($request->all(),[
            'jenis_fasilitas' => 'required|max:10|alpha',
            'nama_fasilitas'  => 'required|between:2,50|string',
            'jumlah_fasilitas'=> 'required|alpha_num'
        ]);

        if ($valid->fails()) {
            return response()->json(['validasi' => $valid->errors()->all()]);
        }

        $data = array(
            'jenis' => $request->jenis_fasilitas,
            'nama'  => $request->nama_fasilitas,
            'jumlah' => $request->jumlah_fasilitas
        );

        if(Fasilitas::where('id_fasilitas', $id)->update($data)){

            return response()->json(['sukses' => "Berhasil Edit Data Fasilitas"]);
        
        }

        return response()->json(['gagal' => "Gagal Edit Data Fasilitas, mohon untuk dicoba/check lagi"]);
    }

    public function deleteData($id){
        if (Fasilitas::where('id_fasilitas', $id)->delete()) {
            return response()->json(['sukses' => "Berhasil Menghapus Data Fasilitas"]);
        }

        return response()->json(['gagal' => "Gagal Menghapus Data Fasilitas, mohon untuk dicoba/check lagi"]);
    }
}
