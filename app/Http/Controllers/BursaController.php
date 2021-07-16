<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class BursaController extends Controller
{
    public function index() {
        $data = DB::table('bursa_soals')->get();
        return view('admin.bursa', ['bursa'=>$data]);
    }

    public function update(Request $request){
        $soal = $request->get('link_soal');
        $kuesioner = $request->get('link_kuesioner');

        $update = DB::table("bursa_soals")->where('id',1)->update(['link_soal'=>$soal,'link_kuisioner'=>$kuesioner]);
        return redirect()->route('admin-bursa-soal')->with('status','Bursa Berhasil Diubah');
    }
}
