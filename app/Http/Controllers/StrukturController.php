<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class StrukturController extends Controller
{
    public function index() {
        return view('admin.struktur');
    }

    public function ambil(Request $request){
        $divisi = $request->get('divisi'); 
        $data = DB::select(DB::raw("SELECT j.nama as jabatan, p.nrp, p.nama, p.jurusan, p.foto_profil FROM (`personals` as p INNER JOIN jabatans as j on p.jabatans_id = j.id) INNER JOIN divisis as d on p.divisis_id = d.id WHERE p.divisis_id = '$divisi'")); 
        return response()->json(array(
            'anggota'=>$data
        ), 200);
    }
}
