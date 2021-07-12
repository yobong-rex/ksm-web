<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class AdminController extends Controller
{
    public function acara(){
        $data = DB::table('acaras')->get();
        return view('admin.acara',['acara'=>$data]);
    }
    public function tambahAcara(Request $request){
        $nama = $request->get('nama');
        $tanggal_mulai = $request->get('tanggal-mulai');
        $tanggal_selesai = $request->get('tanggal-selesai');
        $tipe = $request->get('tipe');
        $poster = $request->get('poster');
        $deskripsi = $request->get('deskripsi');
        $link_grup = $request->get('link_grup');

        $insert=DB::table('acaras')
                ->insert(['nama'=>$nama,'tanggal_mulai'=>$tanggal_mulai,'tanggal_akhir'=>$tanggal_selesai,'eksternal'=>$tipe,'link_gambar'=>$poster,'deskripsi'=>$deskripsi,'link_grup'=>$link_grup]);
            return redirect()->route('acara')
            ->with('status','Acara Berhasil Ditambah');
    }
    public function ambilAcara(Request $request){
        $id_acara = $request->get('id');
        $data = DB::table('acaras')->where('id',$id_acara)->get();
        $mulai = date('Y-m-d\TH:i:s', strtotime($data[0]->tanggal_mulai));
        $tutup = date('Y-m-d\TH:i:s', strtotime($data[0]->tanggal_akhir));
        // $mulai = $data[0]->tanggal_mulai;
        return response()->json(array(
            'list'=> $data,
            'mulai'=>$mulai,
            'selesai'=>$tutup
        ),200);
    }

    public function editAcara(Request $request){
        $id_acara = $request->get('id_acara');
        $nama = $request->get('nama');
        $tanggal_mulai = $request->get('tanggal_mulai');
        $tanggal_selesai = $request->get('tanggal_selesai');
        $tipe = $request->get('tipe');
        $pendaftaran = $request->get('pendaftaran');
        $selesai = $request->get('selesai');
        $poster = $request->get('poster');
        $deskripsi = $request->get('deskripsi');
        $link_grup = $request->get('link_grup');
        $deskripsi_galeri = $request->get('deskripsi_galeri');

        $update = DB::table('acaras')
                    ->where('id',$id_acara)
                    ->update(['nama'=>$nama,
                              'daftar'=>$pendaftaran,
                              'selesai'=>$selesai,
                              'eksternal'=>$tipe,
                              'tanggal_mulai'=>$tanggal_mulai,
                              'tanggal_akhir'=>$tanggal_selesai,
                              'link_grup'=>$link_grup,
                              'link_gambar'=>$poster,
                              'deskripsi'=>$deskripsi,
                              'deskripsi_galeri'=>$deskripsi_galeri]);
        return redirect()->route('acara')
        ->with('status','Acara Berhasil Diubah');
    }

    public function peserta(){
        $data = DB::table('acaras')->get();
        return view('admin.peserta',['acara'=>$data]);
    }
}
