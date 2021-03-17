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
Route::get('/list-artikel', 'ArtikelController@listArtikel');
Route::get('/pengumuman-ppdb', 'ArtikelController@listArtikel');
Route::get('/struktur-organisasi', 'PegawaiController@guestPage');
Route::get('/show/{slug}', 'ArtikelController@showArtikel');
Route::post('/daftar/siswa-baru', 'PPDBController@daftarPesertaDidik');
Route::get('/pendaftaran/download-data/{id}', 'PPDBController@downloadDataPendaftaran');
Route::get('/pendaftaran/sukses/{id}', 'PPDBController@pendaftaranSukses');


// TODO : ROUTE HALAMAN ADMIN
Auth::routes();
Auth::routes(['verify' => true]);   

Route::middleware(['auth','verified'])->group(function (){

        Route::prefix('dashboard')->group(function (){
            Route::get('panel-admin', 'IndexController@dashboard');
            Route::get('galeri-foto', 'GaleriFotoController@masterFoto');
            Route::get('galeri-video', 'GaleriVideoController@masterVideo');
            Route::get('data-pegawai', 'PegawaiController@masterPegawai');
            Route::get('edit-akun', 'AkunController@settingAkunPage');
            Route::get('profil-sekolah', 'ProfileController@masterProfile');
            Route::get('data-pendaftaran', 'PPDBController@masterPendaftaran');
            Route::get('artikel-sekolah', 'ArtikelController@masterArtikel');
        });
        
        Route::prefix('admin')->group(function (){
            //* Route-Artikel
            Route::get('artikel/read-artikel','ArtikelController@dataArtikel');
            Route::post('artikel/add-artikel', 'ArtikelController@createArtikel');
            Route::get('artikel/select-artikel/{id}', 'ArtikelController@selectArtikel');    
            Route::post('artikel/edit-artikel/{id}', 'ArtikelController@editArtikel');
            Route::post('artikel/delete-artikel/{id}', 'ArtikelController@deleteArtikel');
            //* End-Artikel

            //* Route Pengaturan Akun
            Route::post('akun/ubah-nama/{id}', 'AkunController@ubahNama');
            Route::post('akun/ubah-username/{id}', 'AkunController@ubahUsername');
            Route::post('akun/ganti-password/{id}', 'AkunController@gantiPassword');
            Route::post('akun/ubah-email/{id}', 'AkunController@ubahEmail');
            //* End Penganturan Akun

            //* Route-Pegawai
            Route::get('data-pegawai/read-data','PegawaiController@dataPegawai');
            Route::post('data-pegawai/add-data', 'PegawaiController@addDataPegawai');
            Route::get('data-pegawai/select-data/{id}', 'PegawaiController@selectDataPegawai'); 
            Route::post('data-pegawai/edit-data/{id}', 'PegawaiController@editDataPegawai');
            Route::post('data-pegawai/delete-data/{id}', 'PegawaiController@deleteDataPegawai');
            //* End-Pegawai

            //* Route Profile Sekolah
            Route::get('profile/read-profile', 'ProfileController@dataProfile');
            Route::post('profile/edit',  'ProfileController@editProfile');
            Route::post('visi-misi/edit','ProfileController@editVisiMisi');
            //* End-Route Profile Sekolah

            //* Route Fasilitas 
            Route::get('fasilitas/select-data/{id}', 'FasilitasController@selectData');
            Route::post('fasilitas/tambah-data', 'FasilitasController@tambahData');
            Route::post('fasilitas/edit-data/{id}', 'FasilitasController@editData');
            Route::post('fasilitas/delete-data/{id}', 'FasilitasController@deleteData');
            //* End-Route Fasilitas

            //* Route Prestasi 
            Route::get('prestasi/select-data/{id}', 'PrestasiController@selectData');
            Route::post('prestasi/tambah-data', 'PrestasiController@tambahData');
            Route::post('prestasi/edit-data/{id}', 'PrestasiController@editData');
            Route::post('prestasi/delete-data/{id}', 'PrestasiController@deleteData');
            //* End-Route Prestasi

            //* Route Pendaftaran
            Route::get('pendaftaran/read-data', 'PPDBController@getData');
            Route::post('pendaftaran/verify-data', 'PPDBController@changeStatusPendaftaran');
            Route::post('pendaftaran/hapus-data', 'PPDBController@hapuDataPendaftaran');
            //* End-Route Pendaftaran

            Route::prefix('galeri')->group(function (){
                //* Route-Galeri-Foto
                Route::get('read-foto', 'GaleriFotoController@dataFoto');
                Route::post('add-foto', 'GaleriFotoController@uploadFoto');
                Route::get('select-foto/{id}', 'GaleriFotoController@selectDataFoto');
                Route::post('edit-foto/{id}', 'GaleriFotoController@editDataFoto');
                Route::post('delete-foto/{id}', 'GaleriFotoController@deleteDataFoto');
                //* End-Galeri-Foto

                //* Route-Galeri-Video
                Route::get('read-video', 'GaleriVideoController@dataVideo');
                Route::post('add-video', 'GaleriVideoController@embedLinkVideo');
                Route::get('select-video/{id}', 'GaleriVideoController@selectLinkVideo');
                Route::post('edit-video/{id}', 'GaleriVideoController@editLinkVideo');
                Route::post('delete-video/{id}', 'GaleriVideoController@deleteLinkVideo');
                //* End-Galeri-Video
            });
        });

    //* Route Data Siswa
    Route::get('/dashboard/data-siswa', 'junController@dataSiswa');
    //* End-Route Data Siswa
    
});

/* 
TODO: Route Test Dev
! Sebelum Buka link gawe database sek !! 
*/


Route::get('/test', 'dedController@id');
Route::post('/check', 'dedController@check');

Route::post('/post-artikel', 'junController@postArtikel')->name('wildan');

Route::get('/surat', function (){
    $markdown = new Markdown(view(), config('mail.markdown'));
    return $markdown->render('vendor/mail/html/message', ['slot' => 'test']);
});









