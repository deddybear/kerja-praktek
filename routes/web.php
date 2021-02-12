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
Route::get('/', 'halamanController@indexPage');
Route::get('/profil-sekolah', 'halamanController@profilPage');
Route::get('/pendaftaran', 'halamanController@pendaftaranPage');


/* 

TODO: Route Test Dev
! Sebelum Buka link gawe database sek !! 

*/
Route::get('/test', 'testController@test');
Route::get('/select', 'testController@select');

Route::get('/navbar', function () {
    return view('layouts/master');
});
