<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Response;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Controllers\Controller;
use App\Exports\PesertaExport;
use Illuminate\Support\Facades\Storage;
use File;

class AcaraController extends Controller
{
    public function index() {
        $data = DB::table('acaras')->orderBy('id', 'desc')->get();
        return view('admin.acara', ['acara'=>$data]);
    }

    public function tambahAcara(Request $request) {
        $nama = $request->get('nama');
        $tanggal_mulai = $request->get('tanggal-mulai');
        $tanggal_selesai = $request->get('tanggal-selesai');
        $tipe = $request->get('tipe');
        $deskripsi = $request->get('deskripsi');
        $link_grup = $request->get('link_grup');
        $waktu_awal = $request->get('waktu_awal');
        $waktu_akhir = $request->get('waktu_akhir');
        $tahun = $request->get('tahun-acara');
        $nomer_wa = $request->get('nomer_wa');
        $nama_cp = $request->get('nama_cp');
        $nama_file='';

        if ($waktu_awal == $waktu_akhir) {
            $waktu = date('j F Y', strtotime($waktu_awal));
        } else {
            $split_awal = explode("-", $waktu_awal);
            $split_akhir = explode("-", $waktu_akhir);
            
            if ($split_awal[1] == $split_akhir[1]){
                $bulan = date('F Y', strtotime($waktu_awal));
                $waktu = $split_awal[2]." - ".$split_akhir[2]." ".$bulan;
            } else {
                $awal = date('j F', strtotime($waktu_awal));
                $waktu = $awal." - ".date('j F Y', strtotime($waktu_akhir));
            }
        }

        if($request->hasFile('foto-poster')){
            $foto = $request->file("foto-poster");

            $ext =$foto->getClientOriginalExtension();
            $nama_file = 'poster_'.$nama.'_'.$tahun.'.'.$ext;
            $foto->move('assets/img/poster_acara',$nama_file);
        }

        $insert = DB::table('acaras')->insert(['nama'=>$nama, 'tanggal_mulai'=>$tanggal_mulai, 'tanggal_akhir'=>$tanggal_selesai, 'eksternal'=>$tipe, 'link_gambar'=>$nama_file, 'deskripsi'=>$deskripsi, 'link_grup'=>$link_grup, 'tanggal_acara'=>$waktu, 'tahun'=>$tahun,'nomer_cp'=>$nomer_wa,'nama_cp'=>$nama_cp]);
            
        return redirect()->route('admin-acara')->with('status','Acara Berhasil Ditambah');
    }

    public function ambilAcara(Request $request) {
        $id_acara = $request->get('id');
        $data = DB::table('acaras')->where('id', $id_acara)->get();
        $mulai = date('Y-m-d\TH:i', strtotime($data[0]->tanggal_mulai));
        $tutup = date('Y-m-d\TH:i', strtotime($data[0]->tanggal_akhir));
        $find = '-';
        $contain = strpos($data[0]->tanggal_acara, $find);
        
        if($contain == true){
            $leng = explode(" ", $data[0]->tanggal_acara);

            if (count($leng) > 5) {
                $tanggal_awal = $leng[0]."-".$leng[1]."-".$leng[5];
                $tanggal_akhir = $leng[3]."-".$leng[4]."-".$leng[5];
            } else {
                $tanggal_awal = $leng[0]."-".$leng[3]."-".$leng[4];
                $tanggal_akhir = $leng[2]."-".$leng[3]."-".$leng[4];
            }
        } else {
            $tanggal_awal = $data[0]->tanggal_acara;
            $tanggal_akhir = $data[0]->tanggal_acara;
        }

        $awal = date('Y-m-d', strtotime($tanggal_awal));
        $akhir = date('Y-m-d', strtotime($tanggal_akhir));

        return response()->json(array(
            'list'=>$data,
            'mulai'=>$mulai,
            'selesai'=>$tutup,
            'tanggal_awal'=>$awal,
            'tanggal_akhir'=>$akhir
        ), 200);
    }

    public function editAcara(Request $request) {
        $id_acara = $request->get('id_acara');
        $nama = $request->get('nama');
        $tanggal_mulai = $request->get('tanggal_mulai');
        $tanggal_selesai = $request->get('tanggal_selesai');
        $tipe = $request->get('tipe');
        $pendaftaran = $request->get('pendaftaran');
        $selesai = $request->get('selesai');
        $deskripsi = $request->get('deskripsi');
        $link_grup = $request->get('link_grup');
        $waktu_awal = $request->get('waktu_awal');
        $waktu_akhir = $request->get('waktu_akhir');
        $tahun = $request->get('tahun-acara');
        $nomer_wa = $request->get('nomer_wa');
        $nama_cp = $request->get('nama_cp');
        $nama_file='';

        if($waktu_awal == $waktu_akhir){
            $waktu = date('j F Y', strtotime($waktu_awal));
        } else {
            $split_awal = explode("-", $waktu_awal);
            $split_akhir = explode("-", $waktu_akhir);
            
            if($split_awal[1] == $split_akhir[1]){
                $bulan = date('F Y', strtotime($waktu_awal));
                $waktu = $split_awal[2]." - ".$split_akhir[2]." ".$bulan;
            } else {
                $awal = date('j F', strtotime($waktu_awal));
                $waktu = $awal." - ".date('j F Y', strtotime($waktu_akhir));
            }
        }

        if($request->hasFile('foto-poster')){
            $foto = $request->file("foto-poster");
            $ext =$foto->getClientOriginalExtension();
            $nama_file = 'poster_'.$nama.'_'.$tahun.'.'.$ext;
            File::delete(public_path('assets/img/poster_acara/'.$nama_file));
            $foto->move('assets/img/poster_acara/',$nama_file);
            $update = DB::table('acaras')->where('id',$id_acara)->update(['link_gambar'=>$nama_file]);
        }

        $update = DB::table('acaras')->where('id',$id_acara)->update([
            'nama'=>$nama,
            'daftar'=>$pendaftaran,
            'selesai'=>$selesai,
            'eksternal'=>$tipe,
            'tanggal_mulai'=>$tanggal_mulai,
            'tanggal_akhir'=>$tanggal_selesai,
            'link_grup'=>$link_grup,
            'deskripsi'=>$deskripsi,
            'tanggal_acara'=>$waktu,
            'tahun'=>$tahun,
            'nomer_cp'=>$nomer_wa,
            'nama_cp'=>$nama_cp
        ]);
        
        return redirect()->route('admin-acara')->with('status','Acara Berhasil Diubah');
    }


    public function export_excel($acara_id){
        $acara = DB::table('acaras')->where('id',$acara_id)->get();
        $nama_acara = $acara[0]->nama."_".$acara[0]->tahun;
        $peserta = DB::table('pesertas')->where('acaras_id',$acara_id)->get();
         return (new PesertaExport($acara_id))->download('Peserta '.$nama_acara.'.xlsx');
    }

    public function hapusPeserta(Request $request){
        $id_acara = $request->get('acara_delete');
        $nama_acara = $request->get('nama_acara_delete');
        $delete_peserta = DB::table('pesertas')->where('acaras_id',$id_acara)->delete();
        return redirect()->route('admin-acara')->with('status','Berhasil menghapus semua peserta '.$nama_acara);
    }

   
}
