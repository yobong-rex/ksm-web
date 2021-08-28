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

// Route untuk halaman client
Route::get('/', 'MainController@beranda')->name('beranda');
Route::get('/struktur-organisasi', 'MainController@strukturOrganisasi')->name('struktur-organisasi');
Route::get('/acara/{nama_acara}', 'MainController@acara')->name('acara');
Route::get('/pendaftaran/{acara_id}', 'MainController@pendaftaran')->name('pendaftaran');
Route::get('/all-galeri','MainController@allGaleri')->name('all-galeri');
Route::get('/galeri/{nama_acara}', 'MainController@galeri')->name('galeri');
Route::get('/lsta-bursa', 'MainController@lstaBursa')->name('lsta-bursa');

//route ambil data struktur client
Route::post('/struktur-organisasi/ambil', 'StrukturController@ambilClient')->name('struktur-ambil');

Route::middleware(['auth'])->group(function(){
    // Route untuk admin dashboard
    Route::get('/admin/dashboard','AdminController@index')->name('admin-dashboard')->middleware('auth');

    // Route untuk admin acara
    Route::get('/admin/acara','AcaraController@index')->name('admin-acara')->middleware('auth');
    Route::post('/admin/acara/tambah','AcaraController@tambahAcara')->name('tambah-acara');
    Route::post('/admin/acara/ambil','AcaraController@ambilAcara')->name('ambil-acara');
    Route::post('/admin/acara/edit','AcaraController@editAcara')->name('edit-acara');
    Route::post('/admin/acara/hapus-peserta','AcaraController@hapusPeserta')->name('hapus-semua-peserta');
    Route::get('/admin/acara/excel/{nama_acara}','AcaraController@export_excel')->name('export-excel-peserta');

    // Route untuk admin peserta
    Route::get('/admin/peserta', 'PesertaController@index')->name('admin-peserta')->middleware('auth');
    Route::post('/admin/peserta/ambil','PesertaController@ambilPeserta')->name('ambil-peserta');
    Route::post('/admin/peserta/hapus','PesertaController@hapusPeserta')->name('hapus-peserta');

    // Route untuk admin struktur organisasi
    Route::get('/admin/struktur','StrukturController@index')->name('admin-struktur');
    Route::post('/admin/struktur/tambah','StrukturController@tambah')->name('tambah-anggota');
    Route::post('/admin/struktur/ambil','StrukturController@ambil')->name('ambil-struktur');
    Route::post('/admin/struktur/edit','StrukturController@edit')->name('edit-anggota');
    Route::post('/admin/struktur/hapus','StrukturController@hapus')->name('hapus-anggota');
    Route::post('/admin/struktur/jabatan','StrukturController@ambilJabatan')->name('ambil-jabatan');
    Route::post('/admin/struktur/ambilAnggota','StrukturController@ambilAnggota')->name('ambil-data-anggota');

    // Route untuk admin galeri
    Route::get('/admin/galeri','GaleriController@index')->name('admin-galeri');
    Route::get('/admin/galeri/{id}/{acara}','GaleriController@editGaleri')->name('edit-galeri');
    Route::post('/admin/galeri/update','GaleriController@updateGaleri')->name('update-galeri');

    // Route untuk admin info ksm
    Route::get('/admin/info-ksm','AdminController@info')->name('admin-info-ksm');
    Route::post('/admin/update-info-ksm','AdminController@updateInfo')->name('update-info-ksm');

    // Route untuk admin bursa soal
    Route::get('/admin/bursa-soal','BursaController@index')->name('admin-bursa-soal');
    Route::post('/admin/bursa-soal/update','BursaController@update')->name('bursa-update');

    // Ni apa ajg
    Route::get('/csv','AcaraController@csv')->name('csv');
    Route::post('/pendaftaran/ok','pendaftaranControllers@pendaftaran')->name('pendaftaran-ok');
});






