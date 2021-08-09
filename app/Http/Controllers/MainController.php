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

        $daftar_galeri = DB::table('acaras')
                    ->join('galeris', 'acaras.id', '=', 'galeris.acaras_id')
                    ->groupBy('acaras.id', 'acaras.nama')
                    ->select('acaras.id', 'acaras.nama')
                    // ->where('selesai', true) // [BUKA COMMENT INI]
                    ->limit(6)
                    ->get();

        foreach ($daftar_galeri as $key => $value) {
            $get_thumbnail = DB::table('galeris')->where('acaras_id', $value->id)->orderBy('id', 'asc')->select('link_gambar')->get();
            $daftar_galeri[$key]->thumbnail = $get_thumbnail[0]->link_gambar;
        }

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
            'acara' => $daftar_acara,
            'galeri' => $daftar_galeri
        ]);
    }

    // Load halaman struktur organisasi
    function strukturOrganisasi() {
        $info_ksm = DB::table('info_ksms')->get();
        return view('client.struktur_organisasi',['info' => $info_ksm[0]]);
    }

    // Load halaman acara
    function acara() {
        $info_ksm = DB::table('info_ksms')->get();
        return view('client.acara',['info' => $info_ksm[0]]);
    }

    // Load halaman galeri
    function galeri() {
        $info_ksm = DB::table('info_ksms')->get();
        return view('client.galeri',['info' => $info_ksm[0]]);
    }

    // Load halaman lsta & bursa
    function lstaBursa() {
        $info_ksm = DB::table('info_ksms')->get();
        $bursa_soal = DB::table('bursa_soals')->where('id', 1)->get();

        return view('client.lsta_bursa', [
            'info' => $info_ksm[0],
            'bursa' => $bursa_soal[0]
        ]);
    }
}
