<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class MainController extends Controller
{
    // Load halaman beranda
    function beranda() {
        $info_ksm = DB::table('info_ksms')->get();
        return view('client.beranda', ['info' => $info_ksm[0]]);
    }

    // Load halaman struktur organisasi
    function strukturOrganisasi() {
        return view('client.struktur_organisasi');
    }

    // Load halaman acara
    function acara() {
        return view('client.acara');
    }

    // Load halaman galeri
    function galeri() {
        return view('client.galeri');
    }

    // Load halaman lsta & bursa
    function lstaBursa() {
        return view('client.lsta_bursa');
    }
}
