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

Route::get('/', function () {
    return view('home.index');
});

Route::get('/pendaftaran',function(){
    return view('pendaftaran.index');
})->name('pendaftaran');
Route::post('/pendaftaran/ok','pendaftaranControllers@Pendaftaran')->name('pendaftaranOk');

Route::get('/admin','AdminController@dashboard')->name('dashboard')->middleware('auth');
Route::post('/admin/hapus','pendaftaranControllers@hapus')->name('hapus');

//download csv
// Route::get('/csv','pendaftaranControllers@csv')->name('csv');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
