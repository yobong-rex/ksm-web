<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class AdminController extends Controller
{
    function limitWord($text, $limit_word) {
        $words = str_word_count($text, 2);
        $pos = array_keys($words);
        $result = substr($text, 0, $pos[$limit_word]) . '...';
        return $result;
    }

    public function index() {
        $info_ksm = DB::table('info_ksms')->get();
        $limit_word = 15;

        $info_ksm[0]->tentang = (str_word_count($info_ksm[0]->tentang, 0) > $limit_word) ? $this->limitWord($info_ksm[0]->tentang, $limit_word) : $info_ksm[0]->tentang;
        $info_ksm[0]->visi = (str_word_count($info_ksm[0]->visi, 0) > $limit_word) ? $this->limitWord($info_ksm[0]->visi, $limit_word) : $info_ksm[0]->visi;
        $info_ksm[0]->misi = (str_word_count($info_ksm[0]->misi, 0) > $limit_word) ? $this->limitWord($info_ksm[0]->misi, $limit_word) : $info_ksm[0]->misi;

        $jumlah_divisi = DB::table('divisis')->count();
        $jumlah_anggota = DB::table('pesertas')->count();
        $jumlah_proker_selesai = DB::table('acaras')->where('selesai', 1)->count();
        $jumlah_foto = DB::table('galeris')->count();
        $bursa_soal = DB::table('bursa_soals')->get();
        $acara = DB::table('acaras')->select('nama', 'tanggal_acara', 'daftar', 'selesai')->orderBy('tanggal_akhir', 'desc')->get(); // tambahin contact person di select @yobong

        return view('admin.dashboard', [
            'info' => $info_ksm,
            'jumlah_divisi' => $jumlah_divisi,
            'jumlah_anggota' => $jumlah_anggota,
            'jumlah_proker_selesai' => $jumlah_proker_selesai,
            'jumlah_foto' => $jumlah_foto,
            'bursa_soal' => $bursa_soal,
            'acara' => $acara
        ]);
    }

    public function info() {
        $info =  DB::table('info_ksms')->get();
        return view('admin.info', ['info' => $info]);
    }

    public function updateInfo(Request $request) {
        $email = $request->get('email');
        $line = $request->get('line');
        $whatsapp = $request->get('whatsapp');
        $instagram = $request->get('instagram');
        $youtube = $request->get('youtube');

        $update_info = DB::table('info_ksms')->where('id', 1)->update([
            'email' => $email,
            'line' => $line,
            'whatsapp' => $whatsapp,
            'instagram' => $instagram,
            'youtube' => $youtube,
        ]);

        return redirect()->route('admin-info-ksm')->with('status', 'Info KSM berhasil diupdate!');
    }
}
