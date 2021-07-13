<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class MainController extends Controller
{
    // Load halaman beranda
    function beranda() {
        $info_ksm = DB::table('info_ksms')->get();
        $daftar_pengurus = DB::table('personals')
                    ->join('jabatans','personals.jabatans_id','=','jabatans.id')
                    ->where('divisis_id', '1')
                    ->orderBy('jabatans_id', 'asc')
                    ->select('personals.nama as nama', 'personals.foto_profil as foto_profil', 'jabatans.nama as nama_jabatan')
                    ->get();
        $daftar_acara = DB::table('acaras')
                    ->where('eksternal', true)
                    ->where('selesai', false)
                    ->select('nama', 'daftar', 'tanggal_acara', 'link_gambar', 'deskripsi')
                    ->get();

        foreach($daftar_acara as $key => $value) {
            $limit_word = 15;
            if (str_word_count($daftar_acara[$key]->deskripsi, 0) > $limit_word) {
                $words = str_word_count($daftar_acara[$key]->deskripsi, 2);
                $pos = array_keys($words);
                $daftar_acara[$key]->deskripsi = substr($daftar_acara[$key]->deskripsi, 0, $pos[$limit_word]) . '...';
            }
        }

        return view('client.beranda', [
            'info' => $info_ksm[0],
            'pengurus' => $daftar_pengurus,
            'acara' => $daftar_acara
        ]);
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
