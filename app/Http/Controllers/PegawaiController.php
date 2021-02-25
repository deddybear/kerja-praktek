<?php

namespace App\Http\Controllers;
use App\Models\Pegawai;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Ramsey\Uuid\Uuid as Generate;

class PegawaiController extends Controller
{
    public function guestPage()
    {
        $pegawai = Pegawai::select('nip', 'nama_pegawai', 'pendidikan_terakhir', 'jabatan')->get();

        return view('guest/struktur-organisasi', ['pegawai' => $pegawai]);
    }

    //TODO : Halaman Admin dan fungsinya 

    public function masterPegawai(){
        return view('admin/data-pegawai');
    }

    public function dataPegawai(){
        return json_encode(Pegawai::select('*')->with('akun')->get());
        
    }

    public function addDataPegawai(Request $request){
        
        $valid = Validator::make($request->all(), [
             'nip'                 => 'required|alpha_num|max:30',
             'nama_lengkap'        => 'required|string|between:5,50',
             'alamat'              => 'required|string|between:5,100',
             'pendidikan_terakhir' => 'required|string|between:2,3',
             'jabatan'             => 'required|between:5,20'
        ]);

        if($valid->fails()){
            return response()->json(['validasi' => $valid->errors()->all()]);
        }

        $data = array(
            'id_pegawai'          => Generate::uuid4(),
            'created_by'          => Auth::id(),
            'nip'                 => $request->nip,
            'nama_pegawai'        => $request->nama_lengkap,
            'alamat_pegawai'      => $request->alamat,
            'pendidikan_terakhir' => $request->pendidikan_terakhir,
            'jabatan'             => $request->jabatan,
        );

        if(Pegawai::create($data)){
            return response()->json(['sukses' => "Berhasil Menambahkan Data Pegawai"]);
        } else {
            return response()->json(['gagal' => "Gagal Menambahkan Data Pegawai"]);
        }

    }

    public function selectDataPegawai($id){
        return json_encode(Pegawai::all()->where('id_pegawai', $id)->first());
    }

    public function editDataPegawai(Request $request, $id){
        $valid = Validator::make($request->all(), [
            'nip'                 => 'required|alpha_num|max:30',
            'nama_lengkap'        => 'required|string|between:5,50',
            'alamat'              => 'required|string|between:5,100',
            'pendidikan_terakhir' => 'required|string|between:2,3',
            'jabatan'             => 'required|between:5,20'
       ]);

       if($valid->fails()){
           return response()->json(['validasi' => $valid->errors()->all()]);
       }

       $data = array(
           'created_by'          => Auth::id(),
           'nip'                 => $request->nip,
           'nama_pegawai'        => $request->nama_lengkap,
           'alamat_pegawai'      => $request->alamat,
           'pendidikan_terakhir' => $request->pendidikan_terakhir,
           'jabatan'             => $request->jabatan,
       );

       if(Pegawai::where('id_pegawai', $id)->update($data)){
           return response()->json(['sukses' => "Berhasil Mengedit Data Pegawai"]);
       } else {
           return response()->json(['gagal' => "Gagal Mengedit Data Pegawai"]);
       }
    }

    public function deleteDataPegawai($id){
        if(Pegawai::where('id_pegawai', $id)->delete()){
            return response()->json(['sukses' => "Data Pegawai Berhasil dihapus"]);
        } else {
            return response()->json(['gagal' => "Data Pegawai Gagal dihapus"]);
        }
    }
}
