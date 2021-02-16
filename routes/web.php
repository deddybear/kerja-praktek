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


// TODO : ROUTE HALAMAN ADMIN
Route::get('/panel-admin/login', 'AkunController@loginPage')->name('login');
Route::post('/panel-admin/masuk', 'AkunController@masuk');
Route::post('/panel-admin/daftar', 'AkunController@daftar');
Route::post('/panel-admin/lupa-password', 'AkunController@lupaPassword');

/* 
TODO: Route Test Dev
! Sebelum Buka link gawe database sek !! 
*/
Route::group(['middleware' => 'auth'], function () {
    Route::get('/test', 'testController@dashboard')->name('home');
    
});

// Route::get('/test', 'testController@dashboard');
Route::get('/select', 'testController@select');



// Auth::routes();
// Route::get('/home', 'HomeController@index')->name('home');
