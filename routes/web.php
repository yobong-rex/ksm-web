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

Auth::routes(['register'=>false]);
Route::get('/home', 'HomeController@index')->name('home');

// Route halaman utama
Route::get('/', 'MainController@beranda')->name('beranda');
Route::get('/struktur-organisasi', 'MainController@strukturOrganisasi')->name('struktur-organisasi');
Route::get('/acara', 'MainController@acara')->name('acara');
Route::get('/galeri', 'MainController@galeri')->name('galeri');
Route::get('/lsta-bursa', 'MainController@lstaBursa')->name('lsta-bursa');

// Route admin
Route::get('/admin/dashboard','AdminController@index')->name('admin-dashboard')->middleware('auth');

// Route untuk acara
Route::get('/admin/acara','AcaraController@index')->name('admin-acara')->middleware('auth');
Route::post('/admin/acara/tambah','AcaraController@tambahAcara')->name('tambah-acara');
Route::post('/admin/acara/edit','AcaraController@editAcara')->name('edit-acara');
Route::post('/admin/acara/ambil','AcaraController@ambilAcara')->name('ambil-acara');
Route::post('/admin/acara/hapus-peserta','AcaraController@hapusPeserta')->name('hapus-semua-peserta');
Route::get('/admin/acara/excel/{acara_id}','AcaraController@export_excel')->name('export-excel-peserta');

Route::get('/admin/peserta', 'PesertaController@index')->name('admin-peserta')->middleware('auth');
Route::post('/admin/peserta/ambil','PesertaController@ambilPeserta')->name('ambil-peserta');
Route::post('/admin/peserta/hapus','PesertaController@hapusPeserta')->name('hapus-peserta');

Route::get('/admin/struktur','AdminController@index')->name('admin-struktur');

Route::get('/admin/galeri','AdminController@index')->name('admin-galeri');

Route::get('/admin/info-ksm','AdminController@index')->name('admin-info-ksm');

Route::get('/admin/bursa-soal','BursaController@index')->name('admin-bursa-soal');
Route::post('/admin/bursa-soal/update','BursaController@update')->name('bursa-update');

Route::get('/csv','AcaraController@csv')->name('csv');



