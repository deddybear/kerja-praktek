<?php

use Illuminate\Support\Facades\Route;

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
Route::get('/pendaftaran', 'PPDBController@guestPage');
Route::get('/galeri-foto', 'GaleriFotoController@guestPage');
Route::get('/galeri-video','GaleriVideoController@guestPage');
Route::get('/ppdb', 'PPDBController@ppdbPage');
Route::get('/struktur-organisasi', 'StrukturalController@guestPage');
Route::get('/berita', 'ArtikelController@guestPage');


// TODO : ROUTE HALAMAN ADMIN
Route::get('/panel-admin/login', 'AkunController@loginPage');
Route::post('/panel-admin/masuk', 'AkunController@masuk');
Route::post('/panel-admin/masuk', 'AkunController@daftar');
Route::post('/panel-admin/daftar', 'AkunController@lupaPassword');

/* 
TODO: Route Test Dev
! Sebelum Buka link gawe database sek !! 
*/
Route::get('/test', 'testController@dashboard');
Route::get('/select', 'testController@select');

