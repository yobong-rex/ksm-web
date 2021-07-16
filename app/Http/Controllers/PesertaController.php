<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class PesertaController extends Controller
{
    public function index() {
        $acara = DB::table('acaras')->get();
        $peserta= array();
        return view('admin.peserta', ['acara'=>$acara,'peserta'=>$peserta]);
    }

    public function ambilPeserta(Request $request) {
        $id = $request->get('id');
        $peserta= DB::table('pesertas')->where('acaras_id',$id)->get();

        //ambil acara lagi
        $acara = DB::table('acaras')->get();
        return view('admin.peserta', ['acara'=>$acara,'peserta'=>$peserta]);
    }

    public function hapusPeserta(Request $request){
        $id= $request->get('id_hapus');
        $hapus_data = DB::table('pesertas')->where('id',$id)->delete();
        return redirect()->route('admin-peserta')->with('status','Peserta berhasil dihapus');
    }
}
