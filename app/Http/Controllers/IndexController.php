<?php

namespace App\Http\Controllers;
use App\Models\Artikel;
use Illuminate\Http\Request;

class IndexController extends Controller {
    
    public function guestPage() {
        $data = array(
            'tulisan_terbaru' => $this->artikelTerbaru(),
            'artikel_sekolah' => $this->getArtikelbyID('A1'),
            'artikel_guru'    => $this->getArtikelbyID('A2'),
            'artikel_siswa'   => $this->getArtikelbyID('A3')
        );
        
       return view('guest/index', compact('data'));
    }

    public function artikelTerbaru(){
        return Artikel::orderBy('created_at')->limit(7)->get();
    }
    
    public function getArtikelbyID($kategori){
        return Artikel::select('nama_artikel', 'sampul_artikel', 'isi_artikel', 'slug')->where('id_ketentuan', $kategori)->get();
    }

    public function dashboard(){
        return view('admin/dashboard');
    }
}
