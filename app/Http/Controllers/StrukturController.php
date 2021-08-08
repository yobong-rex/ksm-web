<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class StrukturController extends Controller
{
    public function index() {
        $data = DB::table("divisis")->get();
        return view('admin.struktur', ['divisi'=>$data]);
    }

    public function ambil(Request $request){
        $divisi = $request->get('divisi'); 
        $data = DB::select(DB::raw("SELECT j.nama as jabatan, p.nrp, p.nama, p.jurusan, p.foto_profil FROM (`personals` as p INNER JOIN jabatans as j on p.jabatans_id = j.id) INNER JOIN divisis as d on p.divisis_id = d.id WHERE p.divisis_id = '$divisi'")); 
        return response()->json(array(
            'anggota'=>$data
        ), 200);
    }

    public function ambilJabatan(Request $request){
        $divisi = $request->get('divisi'); 
        // $divisi = 2; 
        if($divisi == 1){
            $data = DB::table("jabatans")->limit(4)->get();
        }
        else{
            $data = DB::table("jabatans")->offset(4)->limit(3)->get();
        }
        return response()->json(array(
            'jabatan'=>$data
        ), 200);
    }

    public function tambah(Request $request){
        $nama = $request->get('nama');
        $nrp = $request->get('nrp');
        $jurusan = $request->get('jurusan');
        $divisi = $request->get('divisi');
        $jabatan = $request->get('jabatan');
        $nama_file='';
        
        if($request->hasFile('foto-tambah')){
            $foto = $request->file("foto-tambah");
            $data_divisi = DB::table("divisis")->where('id',$divisi)->get();
            $data_jabatan = DB::table("jabatans")->where('id',$jabatan)->get();

            $ext =$foto->getClientOriginalExtension();
            $nama_file = $data_jabatan[0]->nama.'_'. $data_divisi[0]->nama.'_'.$nama.'.'.$ext;
            $foto->move('assets/img/foto_anggota',$nama_file);
        }
        $insert = DB::table('personals')->insert(['divisis_id'=>$divisi, 'jabatans_id'=>$jabatan,'nrp'=>$nrp, 'nama'=>$nama,'jurusan'=>$jurusan,'foto_profil'=>$nama_file]);
            
        return redirect()->route('admin-struktur')->with('status','Anggota Berhasil Ditambah');



    }
}
