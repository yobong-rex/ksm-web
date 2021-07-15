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

Auth::routes(['register'=>false]); // ['register'=>false]
Route::get('/home', 'HomeController@index')->name('home');

Route::get('/', 'MainController@beranda')->name('beranda');
Route::get('/struktur-organisasi', 'MainController@strukturOrganisasi')->name('struktur-organisasi');
Route::get('/acara', 'MainController@acara')->name('acara');
Route::get('/galeri', 'MainController@galeri')->name('galeri');
Route::get('/lsta-bursa', 'MainController@lstaBursa')->name('lsta-bursa');


Route::get('/pendaftaran',function(){
    return view('pendaftaran.index');
})->name('pendaftaran');

Route::post('/pendaftaran/ok','pendaftaranControllers@Pendaftaran')->name('pendaftaranOk');

Route::post('/admin/tambah','AdminController@tambahAcara')->name('tambah');
Route::post('/admin/edit','AdminController@editAcara')->name('edit');
Route::get('/admin/acara','AdminController@acara')->name('acara')->middleware('auth');
Route::get('/admin/peserta','AdminController@peserta')->name('peserta')->middleware('auth');
Route::post('/admin/ambil','AdminController@ambilAcara')->name('ambilacara');
Route::post('/admin/hapus','pendaftaranControllers@hapus')->name('hapus');

// Route::get('/csv','pendaftaranControllers@csv')->name('csv');



