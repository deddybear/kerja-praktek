<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use App\Models\Akun;


class AkunController extends Controller {

    public function settingAkunPage(){
        return view('admin/edit-akun');
    }

    public function ubahNama($id, Request $request){

        $request->validate([
            'nama_akun' => 'required|string|between:5,50'
        ]);
        
        if (Akun::where('id_akun', $id)->update(['nama' => $request->nama_akun])) {
            Session::flash('sukses', 'Berhasil merubah nama akun anda');
            return redirect('/dashboard/edit-akun');
        } else {
            Session::flash('gagal', 'Gagal merubah nama akun anda');
            return redirect('/dashboard/edit-akun');
        }
    }
    
    public function ubahUsername($id, Request $request){
        $request->validate([
            'username' => 'required|string|between:5,15', Rule::unique('tbl_akun', 'username')->ignore(Auth::id())
        ]);

        if (Akun::where('id_akun', $id)->update(['username' => $request->username])) {
            Session::flash('sukses', 'Berhasil merubah username akun anda');
            return redirect('/dashboard/edit-akun');
        } else {
            Session::flash('gagal', 'Gagal merubah username akun anda');
            return redirect('/dashboard/edit-akun');
        }
        
    }

    public function gantiPassword($id, Request $request){
        $request->validate([
            'password_sekarang' => 'required|string|between:8,17',
            'password' => 'required|string|between:8,17|confirmed'
        ]);

        if ($oldPassword = Akun::select('password')->where('id_akun', $id)->first()) {
            
            if (Hash::check($request->password_sekarang, $oldPassword->password)) {
                
                if (Akun::where('id_akun', $id)->update(['password' => Hash::make($request->password)])) {
                    
                    return redirect('/login')->with('sukses', 'Berhasil merubah password akun anda');
                
                } else {
                    
                    return redirect('/dashboard/edit-akun')->with('gagal', 'Gagal merubah password akun anda');
                }

            }

            return redirect('/dashboard/edit-akun')->with('password_sekarang', 'Password Sekarang/Lama anda salah');
            
        }

        return redirect('/dashboard/edit-akun')->with('gagal', 'Data User tidak diketahui coba sekali lagi');
       
    }

    public function ubahEmail($id, Request $request){
        $request->validate([
            'email' => 'required|email|max:40', Rule::unique('tbl_akun', 'email')->ignore(Auth::id())
        ]);

        if (Akun::where('id_akun', $id)->update(['email' => $request->email])) {
            Session::flash('sukses', 'Berhasil merubah email akun anda');
            return redirect('/dashboard/edit-akun');
        } else {
            Session::flash('gagal', 'Gagal merubah email akun anda');
            return redirect('/dashboard/edit-akun');
        }
    }
}
