<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use File;

class GaleriController extends Controller
{
    public function index() {
        $daftar_galeri = DB::table('acaras')->get(); //->where('selesai', true)
        return view('admin.galeri', ['galeri' => $daftar_galeri]);
    }

    public function editGaleri($acara) {
        // pengecekan udah selesai apa belom

        $acara = str_replace('-', ' ', $acara);

        $galeri_detil = DB::table('acaras')
                ->join('galeris', 'acaras.id', '=', 'galeris.acaras_id')
                ->where('nama', $acara)
                ->select('acaras.id as id_acara', 'acaras.nama as nama_galeri', 'acaras.deskripsi_galeri as deskripsi_galeri', 'galeris.id as id_galeri', 'galeris.link_gambar as link')
                ->get();
        $nama_acara = DB::table('acaras')->where('nama', $acara)->get();

        return view('admin.edit-galeri', ['detil_galeri' => $galeri_detil, 'acara' => $nama_acara[0] ]);
    }

    public function updateGaleri(Request $request) {
        $id_acara = $request->get('id_acara');
        $deskripsi = $request->get('deskripsi_galeri');
        $new_image = $request->file('image');
        $delete_image = $request->get('deleteImage');

        // Delete old image
        if ($delete_image != null) {
            $id_delete = array();
            foreach ($delete_image as $image) if ($image != null) $id_delete[] = intval($image);
            $get_image_delete = DB::table('galeris')->where('acaras_id', $id_acara)->whereIn('id', $id_delete)->get();
    
            if ($get_image_delete != null) {
                $acara = (DB::table('acaras')->where('id', $id_acara)->select('nama', 'tahun')->get())[0];
                $nama_acara = str_replace(' ', '_', strtolower($acara->nama)); //add tahun disini
                
                foreach ($get_image_delete as $image) File::delete(public_path('assets/img/galeri/'.$nama_acara.'/'.$image->link_gambar));
    
                $delete_image = DB::table('galeris')->where('acaras_id', $id_acara)->whereIn('id', $id_delete)->delete();
            }
        }

        // Add new image
        if ($new_image != null) {
            $image_data = array();
            $acara = (DB::table('acaras')->where('id', $id_acara)->select('nama', 'tahun')->get())[0];
            $nama_acara = str_replace(' ', '_', strtolower($acara->nama));  //add tahun disini
            $latest_image_id = DB::table('galeris')->where('acaras_id', $id_acara)->select('id')->orderBy('id', 'desc')->limit(1)->get();

            if ($latest_image_id == null) $latest_image_id[0]->id = 0;
            
            foreach($new_image as $image) {
                $imgFolder = 'assets/img/galeri/'.$nama_acara.'/';
                $imgFile = (++$latest_image_id[0]->id).'.'.$image->extension();
                $image->move($imgFolder, $imgFile);
    
                $temp = ['acaras_id' => $id_acara, 'id' => $latest_image_id[0]->id, 'link_gambar' => $imgFile];
                $image_data[] = $temp;
            }

            $insert_image = DB::table('galeris')->insert($image_data);
        }

        // Update deskripsi database
        $update_deskripsi_galeri = DB::table('acaras')->where('id', $id_acara)->update(['deskripsi_galeri' => $deskripsi]);

        return back()->with('status', 'Galeri berhasil diupdate!');
    }
}
