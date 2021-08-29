<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Carbon\Carbon;;

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
                    ->groupBy('acaras.id', 'acaras.nama', 'acaras.tahun')
                    ->select('acaras.id', 'acaras.nama', 'acaras.tahun')
                    ->where('selesai', true) // [BUKA COMMENT INI]
                    ->orderBy('acaras.id', 'desc')
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
        $daftar_pengurus = DB::table('personals')
                    ->join('jabatans','personals.jabatans_id','=','jabatans.id')
                    ->where('divisis_id', '1')
                    ->orderBy('jabatans_id', 'asc')
                    ->select('personals.nama as nama', 'personals.foto_profil as foto_profil', 'jabatans.nama as nama_jabatan','personals.nrp as nrp')
                    ->get();
        return view('client.struktur_organisasi',['info' => $info_ksm[0],'pengurus' => $daftar_pengurus]);
    }

    // Load halaman acara
    function acara($nama_acara) {
        $info_ksm = DB::table('info_ksms')->get();
        $acara = "%".str_replace('-', ' ', strtolower($nama_acara))."%"; 
        $data = DB::table('acaras')->where('nama','like',$acara)->get();
        return view('client.acara',['info' => $info_ksm[0],'acara'=>$data]);
    }

    // Load halaman galeri
    function galeri($nama_acara) { // $nama_acara
        $info_ksm = DB::table('info_ksms')->get();
        $acara_split = explode('-',$nama_acara);
        $tahun = array_pop($acara_split);
        $acara = implode(' ', $acara_split);    
        $id_galeri_acara = DB::table('acaras')
                    ->where('nama','like','%'.$acara.'%')
                    ->where('tahun',$tahun)
                    ->select('id','deskripsi_galeri','tanggal_acara')
                    ->get();
        $foto= DB::table('galeris')->where('acaras_id',$id_galeri_acara[0]->id)->select('link_gambar')->get();
        return view('client.galeri',['info' => $info_ksm[0], 'foto'=>$foto, 'deskripsi'=>$id_galeri_acara,'acara'=>$nama_acara]);
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

    //load halaman pendaftaran
    function pendaftaran($nama_acara){
        $acara_split = explode('-',$nama_acara);
        $tahun = array_pop($acara_split);
        $acara = implode(' ', $acara_split);
        $info_ksm = DB::table('info_ksms')->get();
        $data = DB::table('acaras')->where('nama','like','%'.$acara.'%')->where('tahun',$tahun)->get();
        $now =  Carbon::now();
        if ($data[0]->tanggal_mulai > $now || $data[0]->tanggal_akhir < $now || $data[0]->selesai == 1){
            return view('client.tutup',[
                'info' => $info_ksm[0]
            ]);
        }
        else{
            return view('client.pendaftaran', [
                'info' => $info_ksm[0],
                'data' => $data
            ]);
        }
        
    }

    function allGaleri(){
        $info_ksm = DB::table('info_ksms')->get();
        $daftar_galeri = DB::table('acaras')
                    ->join('galeris', 'acaras.id', '=', 'galeris.acaras_id')
                    ->groupBy('acaras.id', 'acaras.nama', 'acaras.tahun')
                    ->select('acaras.id', 'acaras.nama', 'acaras.tahun')
                    ->where('selesai', true) // [BUKA COMMENT INI]
                    ->orderBy('acaras.id', 'desc')
                    ->paginate(9);
        foreach ($daftar_galeri as $key => $value) {
            $get_thumbnail = DB::table('galeris')->where('acaras_id', $value->id)->orderBy('id', 'asc')->select('link_gambar')->get();
            $daftar_galeri[$key]->thumbnail = $get_thumbnail[0]->link_gambar;
        }
        return view('client.all-galery', [
            'info' => $info_ksm[0],
            'galeri'=>$daftar_galeri
        ]); 
    }
}
