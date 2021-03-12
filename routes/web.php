<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Mail\Markdown;
use Monolog\Handler\RotatingFileHandler;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// TODO : ROUTE HALAMAN GUEST
Route::get('/', 'IndexController@guestPage');
Route::get('/profil-sekolah', 'ProfileController@guestPage');
Route::get('/pendaftaran', 'PPDBController@pendaftaranPage');
Route::get('/galeri-foto', 'GaleriFotoController@guestPage');
Route::get('/galeri-video','GaleriVideoController@guestPage');
Route::get('/pengumuman-ppdb', 'PPDBController@pengumumanPage');
Route::get('/struktur-organisasi', 'PegawaiController@guestPage');
Route::get('/artikel', 'ArtikelController@guestPage');
Route::post('/daftar/siswa-baru', 'PPDBController@daftarPesertaDidik');


// TODO : ROUTE HALAMAN ADMIN
Auth::routes();
Auth::routes(['verify' => true]);   

Route::middleware(['auth','verified'])->group(function (){

        Route::get('/dashboard', 'IndexController@dashboard');
    //* Route-Artikel
        Route::get('/dashboard/artikel-sekolah', 'ArtikelController@masterArtikel');
        Route::get('/admin/artikel/read-artikel','ArtikelController@dataArtikel');
        Route::post('/admin/artikel/add-artikel', 'ArtikelController@createArtikel');
        Route::get('/admin/artikel/select-artikel/{id}', 'ArtikelController@selectArtikel');    
        Route::post('/admin/artikel/edit-artikel/{id}', 'ArtikelController@editArtikel');
        Route::post('/admin/artikel/delete-artikel/{id}', 'ArtikelController@deleteArtikel');
    //* End-Artikel

    //* Route-Galeri-Foto
        Route::get('/dashboard/galeri-foto', 'GaleriFotoController@masterFoto');
        Route::get('/admin/galeri/read-foto', 'GaleriFotoController@dataFoto');
        Route::post('/admin/galeri/add-foto', 'GaleriFotoController@uploadFoto');
        Route::get('/admin/galeri/select-foto/{id}', 'GaleriFotoController@selectDataFoto');
        Route::post('/admin/galeri/edit-foto/{id}', 'GaleriFotoController@editDataFoto');
        Route::post('/admin/galeri/delete-foto/{id}', 'GaleriFotoController@deleteDataFoto');
    //* End-Galeri-Foto

    //* Route-Galeri-Video
        Route::get('/dashboard/galeri-video', 'GaleriVideoController@masterVideo');
        Route::get('/admin/galeri/read-video', 'GaleriVideoController@dataVideo');
        Route::post('/admin/galeri/add-video', 'GaleriVideoController@embedLinkVideo');
        Route::get('/admin/galeri/select-video/{id}', 'GaleriVideoController@selectLinkVideo');
        Route::post('/admin/galeri/edit-video/{id}', 'GaleriVideoController@editLinkVideo');
        Route::post('/admin/galeri/delete-video/{id}', 'GaleriVideoController@deleteLinkVideo');
    //* End-Galeri-Video

    //* Route-Pegawai
        Route::get('/dashboard/data-pegawai', 'PegawaiController@masterPegawai');
        Route::get('/admin/data-pegawai/read-data','PegawaiController@dataPegawai');
        Route::post('/admin/data-pegawai/add-data', 'PegawaiController@addDataPegawai');
        Route::get('/admin/data-pegawai/select-data/{id}', 'PegawaiController@selectDataPegawai'); 
        Route::post('/admin/data-pegawai/edit-data/{id}', 'PegawaiController@editDataPegawai');
        Route::post('/admin/data-pegawai/delete-data/{id}', 'PegawaiController@deleteDataPegawai');
    //* End-Pegawai

    //* Route Pengaturan Akun
        Route::get('/dashboard/edit-akun', 'AkunController@settingAkunPage');
        Route::post('/admin/akun/ubah-nama/{id}', 'AkunController@ubahNama');
        Route::post('/admin/akun/ubah-username/{id}', 'AkunController@ubahUsername');
        Route::post('/admin/akun/ganti-password/{id}', 'AkunController@gantiPassword');
        Route::post('/admin/akun/ubah-email/{id}', 'AkunController@ubahEmail');
        Route::post('/admin/lupa-password', 'AkunController@lupaPassword');
    //* End Penganturan Akun

    //* Route Profile Sekolah
        Route::get('/dashboard/profil-sekolah', 'ProfileController@masterProfile');
        Route::get('/admin/profile/read-profile', 'ProfileController@dataProfile');
        Route::post('/admin/profile/edit',  'ProfileController@editProfile');
        Route::post('/admin/visi-misi/edit','ProfileController@editVisiMisi');
    //* End-Route Sekolah

    //* Route Fasilitas 
        Route::get('/admin/fasilitas/select-data/{id}', 'FasilitasController@selectData');
        Route::post('/admin/fasilitas/tambah-data', 'FasilitasController@tambahData');
        Route::post('/admin/fasilitas/edit-data/{id}', 'FasilitasController@editData');
        Route::post('/admin/fasilitas/delete-data/{id}', 'FasilitasController@deleteData');
    //* End-Route Fasilitas

    //* Route Prestasi 
        Route::get('/admin/prestasi/select-data/{id}', 'PrestasiController@selectData');
        Route::post('/admin/prestasi/tambah-data', 'PrestasiController@tambahData');
        Route::post('/admin/prestasi/edit-data/{id}', 'PrestasiController@editData');
        Route::post('/admin/prestasi/delete-data/{id}', 'PrestasiController@deleteData');
    //* End-Route Prestasi

    
        // Route::get('/dashboard/pengumuman-ppdb', 'junController@ppdbAdmin');
        Route::get('/dashboard/data-siswa', 'junController@dataSiswa');
        Route::get('/dashboard/data-pendaftar', 'junController@dataPendaftar');

        

    
    
});

/* 
TODO: Route Test Dev
! Sebelum Buka link gawe database sek !! 
*/


Route::get('/test', 'dedController@id');
Route::post('/check', 'dedController@check');
Route::get('/select', 'junController@select');

Route::get('/kontol', function() {
    return view('layouts.coba');
});

Route::post('/post-artikel', 'junController@postArtikel')->name('wildan');

Route::get('/surat', function (){
    $markdown = new Markdown(view(), config('mail.markdown'));
    return $markdown->render('vendor/mail/html/message', ['slot' => 'test']);
});









