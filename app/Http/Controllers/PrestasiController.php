<?php

namespace App\Http\Controllers;

use App\Models\Prestasi;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Ramsey\Uuid\Uuid as Generate;

class PrestasiController extends Controller {
    
    public function selectData($id){
        return json_encode(Prestasi::select('nama_lomba', 'penyelenggara', 'diperoleh')->where('id_prestasi', $id)->first());
    }

    public function tambahData(Request $request){
   
        $valid = Validator::make($request->all(), [
            'peringkat_prestasi' => 'required|max:10|string',
            'nama_lomba'         => 'required|between:3,50|string',
            'penyelenggara_lomba'=> 'required|between:3,50|string',
            'waktu_lomba'        => 'required|date_format:Y-m-d',
            'peraih_prestasi'    => 'required|string|between:3,50'
        ]);
    
        if ($valid->fails()){
            return response()->json(['validasi' => $valid->errors()->all()]);
        }

        $data = array(
            'id_prestasi'  => Generate::uuid4(),
            'id_profile'   => '0112ccb6-4bc4-445f-914d-6b3c50bec461',
            'peringkat'    => $request->peringkat_prestasi,
            'nama_lomba'   => $request->nama_lomba,
            'penyelenggara'=> $request->penyelenggara_lomba,
            'diperoleh'    => $request->peraih_prestasi,
            'waktu'        => $request->waktu_lomba
        );

        if (Prestasi::create($data)) {
            return response()->json(['sukses' => 'Berhasil Menambahkan Data Prestasi']);
        }

        return response()->json(['gagal' => 'Gagal Menambahkan Data Baru, Silahkan dicoba sekali lagi']);
    }

    public function editData(Request $request, $id){
        
        $valid = Validator::make($request->all(), [
            'peringkat_prestasi' => 'required|max:10|string',
            'nama_lomba'         => 'required|between:3,50|string',
            'penyelenggara_lomba'=> 'required|between:3,50|string',
            'waktu_lomba'        => 'required|date_format:Y-m-d',
            'peraih_prestasi'    => 'required|string|between:3,50'
        ]);
    
        if ($valid->fails()){
            return response()->json(['validasi' => $valid->errors()->all()]);
        }

        $data = array(
            'peringkat'    => $request->peringkat_prestasi,
            'nama_lomba'   => $request->nama_lomba,
            'penyelenggara'=> $request->penyelenggara_lomba,
            'diperoleh'    => $request->peraih_prestasi,
            'waktu'        => $request->waktu_lomba
        );

        if (Prestasi::where('id_prestasi', $id)->update($data)) {
            return response()->json(['sukses' => 'Berhasil Mengedit Data Prestasi']);
        }

        return response()->json(['gagal' => 'Gagal Mengedit Data Baru, Silahkan dicoba sekali lagi']);
    
    }

    public function deleteData($id){
        if (Prestasi::where('id_prestasi', $id)->delete()) {
            return response()->json(['sukses' => 'Berhasil Menghapus Data Prestasi']);
        }
        return response()->json(['gagal' => 'Gagal Menghapus Data Baru, Silahkan dicoba sekali lagi']);
    }
}
