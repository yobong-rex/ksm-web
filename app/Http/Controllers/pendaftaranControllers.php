<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Response;
use Carbon\Carbon;

class pendaftaranControllers extends Controller
{
    //untuk pendaftaran
    public function Pendaftaran(Request $request){
    //     $now =  Carbon::now();
    //     $nama = $request->get('nama');
    //     $email = $request->get('email');
    //     $nrp = $request->get('nrp');
    //     // $jurusan = $request->get('jurusan');
    //     // $angkatan = $request->get('angkatan');
    //     $jurusan = '';
    //     $angkatan = '';
    //     $jurusanOther = $request->get('jurusanOther');
    //     $angkatanOther = $request->get('angkatanOther');
    //     $whatsapp = $request->get('whatsapp');

    //     if($jurusanOther == ""){
    //         $jurusan = $request->get('jurusan');
    //     }
    //     else{
    //         $jurusan = $jurusanOther;
    //     }

    //     if($angkatanOther == ""){
    //         $angkatan = $request->get('angkatan');
    //     }
    //     else{
    //         $angkatan = $angkatanOther;
    //     }
    //     $insert= DB::table('pendaftaran')->insert([
    //         'nama'=>$nama,
    //         'email'=>$email,
    //         'nrp'=>$nrp,
    //         'jurusan'=>$jurusan,
    //         'angkatan'=>$angkatan,
    //         'nohp_whatsapp'=>$whatsapp,
    //         'waktu'=>$now
    //     ]);
        // return redirect()->route('pendaftaran')->with('status','Pendaftaran berhasil');
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
