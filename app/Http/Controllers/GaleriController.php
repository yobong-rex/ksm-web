<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class GaleriController extends Controller
{
    public function index() {
        $daftar_galeri = DB::table('acaras')
                    ->join('galeris', 'acaras.id', '=', 'galeris.acaras_id')
                    ->groupBy('acaras.id', 'acaras.nama')
                    ->select('acaras.id', 'acaras.nama')
                    ->limit(3)
                    // ->where('selesai', true) // [BUKA COMMENT INI]
                    ->get();

        foreach ($daftar_galeri as $key => $value) {
            $get_thumbnail = DB::table('galeris')->where('acaras_id', $value->id)->orderBy('id', 'asc')->select('link_gambar')->get();
            $daftar_galeri[$key]->thumbnail = $get_thumbnail[0]->link_gambar;
        }

        return view('admin.galeri', ['galeri' => $daftar_galeri]);
    }

    public function muat(Request $request) {
        $offset = $request->get('galleryAmount');

        $daftar_galeri = DB::table('acaras')
                ->join('galeris', 'acaras.id', '=', 'galeris.acaras_id')
                ->groupBy('acaras.id', 'acaras.nama')
                ->select('acaras.id', 'acaras.nama')
                ->offset($offset)
                ->limit(3)
                // ->where('selesai', true) // [BUKA COMMENT INI]
                ->get();

        foreach ($daftar_galeri as $key => $value) {
            $get_thumbnail = DB::table('galeris')->where('acaras_id', $value->id)->orderBy('id', 'asc')->select('link_gambar')->get();
            $daftar_galeri[$key]->thumbnail = $get_thumbnail[0]->link_gambar;
        }

        return response()->json(array(
            'galeri' => $daftar_galeri
        ), 200);
    }
}
