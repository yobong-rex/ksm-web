<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class AdminController extends Controller
{
    public function dashboard(){
        $data = DB::table('acaras')->get();
        return view('admin.dashboard',['acara'=>$data]);
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
            return redirect()->route('dashboard')
            ->with('status','Acara Berhasil Ditambah');
    }
    public function ambilAcara(Request $request){
        $id_acara = $request->get('id');
        $data = DB::table('acaras')->where('id',$id_acara)->get();
        return response()->json(array(
            'list'=> $data
        ),200);
    }
}
