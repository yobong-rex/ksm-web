<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Response;
use Carbon\Carbon;

class pendaftaranControllers extends Controller
{
    //untuk pendaftaran
    public function pendaftaran(Request $request){
        $now =  Carbon::now();
        $nrp= $request->get('nrp');
        $nama= $request->get('nama');
        $email= $request->get('email');
        $jurusan= $request->get('jurusan');
        $no_hp= $request->get('no_hp');
        $id_acara= $request->get('id_acara');
        $data=DB::table('acaras')->where('id',$id_acara)->get();

        $insert = DB::table('pesertas')->insert(['acaras_id'=>$id_acara,'nama'=>$nama,'nrp'=>$nrp,'email'=>$email,'jurusan'=>$jurusan,'no_hp'=>$no_hp,'waktu'=>$now]);
        if($insert){
            $msg="Pendaftaran berhasil <br> Silahkan memasuki grup memalui link dibawah ini <br> <a href=".$data[0]->link_grup.">".$data[0]->link_grup."</a>";
        }
        else{
            $msg="Maaf gagal melakukan pendaftaran <br> silahkan refres halaman dan mencoba kembali";
        }
        return response()->json(array(
            'msg'=>$msg
        ), 200);

     }

    public function listPendaftar(){
        // $data = DB::table('pendaftaran')->get();
        return view('admin.index');
    }

    public function hapus(Request $request){
        // $id_hapus = $request->get('hapus');
        // $hapus_data = DB::table('pendaftaran')->where('id',$id_hapus)->delete();
        // return redirect()->route('listpendaftaran')->with('status','Peserta berhasil dihapus');
    }

    // public function csv(){
    //     $data = DB::table('pendaftaran')->get();
    //     $filename = "peserta_se.csv";
    //     $nomer = 1;
    //     $handle = fopen($filename, 'w+');
    //     fputcsv($handle, array('No', 'Nama', 'Email', 'NRP', 'Jurusan', 'Angkatan', 'No HP/Whatsapp', 'Waktu Daftar'));
    //     foreach($data as $row) {
    //         fputcsv($handle, array($nomer, $row->nama, $row->email, $row->nrp, $row->jurusan, $row->angkatan, $row->nohp_whatsapp, $row->waktu));
    //         $nomer++;
    //     }

    //     fclose($handle);

    //     $headers = array(
    //         'Content-Type' => 'text/csv',
    //     );

    //     return Response::download($filename, 'peserta_se.csv.csv', $headers);
    // }
}
