<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Response;

class AcaraController extends Controller
{
    public function index() {
        $data = DB::table('acaras')->get();
        return view('admin.acara', ['acara'=>$data]);
    }

    public function tambahAcara(Request $request) {
        $nama = $request->get('nama');
        $tanggal_mulai = $request->get('tanggal-mulai');
        $tanggal_selesai = $request->get('tanggal-selesai');
        $tipe = $request->get('tipe');
        $poster = $request->get('poster');
        $deskripsi = $request->get('deskripsi');
        $link_grup = $request->get('link_grup');
        $waktu_awal = $request->get('waktu_awal');
        $waktu_akhir = $request->get('waktu_akhir');

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

        $insert = DB::table('acaras')->insert(['nama'=>$nama, 'tanggal_mulai'=>$tanggal_mulai, 'tanggal_akhir'=>$tanggal_selesai, 'eksternal'=>$tipe, 'link_gambar'=>$poster, 'deskripsi'=>$deskripsi, 'link_grup'=>$link_grup, 'tanggal_acara'=>$waktu]);
            
        return redirect()->route('admin-acara')->with('status','Acara Berhasil Ditambah');
    }

    public function ambilAcara(Request $request) {
        $id_acara = $request->get('id');
        $data = DB::table('acaras')->where('id', $id_acara)->get();
        $mulai = date('Y-m-d\TH:i:s', strtotime($data[0]->tanggal_mulai));
        $tutup = date('Y-m-d\TH:i:s', strtotime($data[0]->tanggal_akhir));
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
        $poster = $request->get('poster');
        $deskripsi = $request->get('deskripsi');
        $link_grup = $request->get('link_grup');
        $deskripsi_galeri = $request->get('deskripsi_galeri');
        $waktu_awal = $request->get('waktu_awal');
        $waktu_akhir = $request->get('waktu_akhir');

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

        $update = DB::table('acaras')->where('id',$id_acara)->update([
            'nama'=>$nama,
            'daftar'=>$pendaftaran,
            'selesai'=>$selesai,
            'eksternal'=>$tipe,
            'tanggal_mulai'=>$tanggal_mulai,
            'tanggal_akhir'=>$tanggal_selesai,
            'link_grup'=>$link_grup,
            'link_gambar'=>$poster,
            'deskripsi'=>$deskripsi,
            'deskripsi_galeri'=>$deskripsi_galeri,
            'tanggal_acara'=>$waktu
        ]);
        
        return redirect()->route('admin-acara')->with('status','Acara Berhasil Diubah');
    }

    public function csv(Request $request){
        $id_acara = $request->get('id_acara');
        $nama_acara = $request->get('nama_acara');
        $data = DB::table('pesertas')->where('acaras_id',$id_acara)->get();
        $filename = "peserta_".$nama_acara.".csv";
            
        $nomer = 1;
        $handle = fopen($filename, 'w+');
        fputcsv($handle, array('No', 'Nama', 'Email', 'NRP', 'Jurusan', 'Angkatan', 'No HP/Whatsapp', 'Waktu Daftar'));
        foreach($data as $row) {
            fputcsv($handle, array($nomer, $row->nama, $row->email, $row->nrp, $row->jurusan, $row->angkatan, $row->nohp_whatsapp, $row->waktu));
            $nomer++;
        }
    
        fclose($handle);

        $headers = array(
            'Content-Type' => 'text/csv',
        );

        return Response::download($filename, $filename.'.csv', $headers);
    }
}
