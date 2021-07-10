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
Route::get('/', 'MainController@index')->name('main-page');
Route::get('/home', 'HomeController@index')->name('home');

Route::get('/pendaftaran',function(){
    return view('pendaftaran.index');
})->name('pendaftaran');

Route::post('/pendaftaran/ok','pendaftaranControllers@Pendaftaran')->name('pendaftaranOk');

Route::get('/admin','AdminController@dashboard')->name('dashboard')->middleware('auth');
Route::post('/admin/tambah','AdminController@tambahAcara')->name('tambah');
Route::post('/admin/ambil','AdminController@ambilAcara')->name('ambilacara');
Route::post('/admin/hapus','pendaftaranControllers@hapus')->name('hapus');

// Route::get('/csv','pendaftaranControllers@csv')->name('csv');



