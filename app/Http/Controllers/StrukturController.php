<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Storage;
use File;

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

    public function edit(Request $request){
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
            $data_foto = DB::table('personals')->where('nrp',$nrp)->get();
            File::delete(public_path('assets/img/foto_anggota/'.$data_foto[0]->foto_profil));
            $ext =$foto->getClientOriginalExtension();
            $nama_file = $data_jabatan[0]->nama.'_'. $data_divisi[0]->nama.'_'.$nama.'.'.$ext;
            $foto->move('assets/img/foto_anggota',$nama_file);
            $update = DB::table('personals')->where('nrp',$nrp)->update(['foto_profil'=>$nama_file]);
        }
        $update = DB::table('personals')->where('nrp',$nrp)->update(['divisis_id'=>$divisi, 'jabatans_id'=>$jabatan,'nrp'=>$nrp, 'nama'=>$nama,'jurusan'=>$jurusan]);
        return redirect()->route('admin-struktur')->with('status','Data Anggota Berhasil Diubah');
    }

    public function ambilAnggota(Request $request){
        $nrp = $request->get('nrp');
        $data = DB::select(DB::raw("SELECT j.nama as jabatan, p.nrp, p.nama, p.jurusan, p.foto_profil, d.nama AS divisi FROM (`personals` as p INNER JOIN jabatans as j on p.jabatans_id = j.id) INNER JOIN divisis as d on p.divisis_id = d.id WHERE p.nrp = '$nrp'")); 
        if($data[0]->divisi == "BPH"){
            $data_jabatan = DB::table("jabatans")->limit(4)->get();
        }
        else{
            $data_jabatan = DB::table("jabatans")->offset(4)->limit(3)->get();
        }
        return response()->json(array(
            'anggota_persoanal'=>$data,
            'jabatan'=>$data_jabatan
        ), 200);
    }

    public function hapus(Request $request){
        $nrp = $request->get('nrp_anggota_delete');
        $data_foto = DB::table('personals')->where('nrp',$nrp)->get();
        File::delete(public_path('assets/img/foto_anggota/'.$data_foto[0]->foto_profil));
        $delete_peserta = DB::table('personals')->where('nrp',$nrp)->delete();
        return redirect()->route('admin-struktur')->with('status','Data Anggota Berhasil Dihapus');
    }   

    function ambilClient(Request $request){
        $id_divisi = $request->get('id_divisi');
        //  $id_divisi = 1;
        if($id_divisi==1){
            $bph = DB::table('personals')
                    ->join('jabatans','personals.jabatans_id','=','jabatans.id')
                    ->join('divisis','personals.divisis_id','=','divisis.id')
                    ->where('personals.divisis_id', '1')
                    ->orderBy('personals.jabatans_id', 'asc')
                    ->select('personals.nama as nama', 'personals.foto_profil as foto_profil', 'jabatans.nama as nama_jabatan','personals.nrp as nrp', 'divisis.nama as divisi')
                    ->get();
            return response()->json(array(
                'msg'=>'bph',
                'bph'=>$bph
            ), 200);
        }
        else{
            $koor_wakoor = DB::select(DB::raw("SELECT j.nama as jabatan, p.nrp, p.nama, p.foto_profil, d.nama AS divisi FROM (personals as p INNER JOIN jabatans as j on p.jabatans_id = j.id) INNER JOIN divisis as d on p.divisis_id = d.id WHERE p.divisis_id = '$id_divisi' and (p.jabatans_id = 5 or p.jabatans_id = 6)")); 
            $anggota = DB::table('personals')
            ->join('jabatans','personals.jabatans_id','=','jabatans.id')
            ->join('divisis','personals.divisis_id','=','divisis.id')
            ->where('personals.divisis_id',$id_divisi)
            ->where('personals.jabatans_id',7)
            ->select('personals.nama as nama', 'personals.foto_profil as foto_profil', 'jabatans.nama as nama_jabatan','personals.nrp as nrp', 'divisis.nama as divisi')
            ->get();
            return response()->json(array(
                'msg'=>'selain bph',
                'koor_wakoor'=>$koor_wakoor,
                'anggota'=>$anggota
            ), 200);
        }
    }
}
