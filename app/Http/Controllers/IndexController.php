<?php

namespace App\Http\Controllers;
use App\Models\Artikel;
use App\Models\Galeri;
use App\Models\Pendaftaran;
use App\Models\Pegawai;
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
        return Artikel::select('nama_artikel', 'sampul_artikel', 'isi_artikel', 'slug', 'created_at')->orderBy('created_at')->limit(7)->get();
    }
    
    public function getArtikelbyID($kategori){
        return Artikel::select('nama_artikel', 'sampul_artikel',  'slug')->where('id_ketentuan', $kategori)->get();
    }

    public function dashboard(){
       
        $data = array(
            'total_artikel'   => Artikel::count(),
            'total_nonvalid'  => Pendaftaran::where('status_pendaftaran', 0)->count(),
            'total_pegawai'   => Pegawai::count(),
            'total_galeri'    => Galeri::count()
        );

        return view('admin/dashboard', compact('data')); 
    }
}
