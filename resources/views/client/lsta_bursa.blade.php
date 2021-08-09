@extends('layout.client')

@section('content')
<section>
<div class="container" id="introduction">
            <div class="introduction-wrapper mt-3 mt-sm-3 mt-md-4 pt-5 pb-3 pb-sm-3 pb-md-5 h4 text-white">
                <div class="row mt-4">
                    <div class="col-12 text-center">
                    <div><img src="https://ksm-if-ubaya.com/assets/img/logo-bursa.png" alt="Koor Information"class="w-75"></div>
                        <div class="display-3 mb-2 mb-sm-2 mb-md-3 header-beranda">Tentang Bursa Soal</div>
                        <div class="p-3 p-sm-3 p-md-4 pt-4 content-text">Kumpulan soal-soal ujian Teknik Informatika untuk menghadapi UTS dan UAS. Sukses Ujiannya!</div>
                    </div>
                    <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-6 text-center mt-4 mt-sm-4 mt-md-5">
                        <div class="display-3 mb-2 mb-sm-2 mb-md-3 header-beranda">Link Soal</div>
                        <a href="{{ $bursa->link_soal }}" class="btn btn-primary font-weight-bold mt-3 h1 p-3 pl-5 pr-5" style="font-size: 18px">Soal</a>
                    </div>
                    <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-6 text-center mt-4 mt-sm-4 mt-md-5">
                        <div class="display-3 mb-2 mb-sm-2 mb-md-3 header-beranda">Link Kuisioner</div>
                        <a href="{{ $bursa->link_kuisioner }}" class="btn btn-primary font-weight-bold mt-3 h1 p-3 pl-5 pr-5" style="font-size: 18px">Kuisioner</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="container" id="introduction">
            <div class="introduction-wrapper mt-3 mt-sm-3 mt-md-4 pt-5 pb-3 pb-sm-3 pb-md-5 h4 text-white">
                <div class="row mt-4">
                    <div class="col-12 text-center">
                        <div class="display-3 mb-2 mb-sm-2 mb-md-3 header-beranda">Tentang LSTA</div>
                        <div class="p-3 p-sm-3 p-md-4 pt-4 content-text">LSTA (Latihan Sidang Tugas Akhir) merupakan kegiatan Jurusan Informatika yang ditujukan untuk mahasiswa tingkat 3 (tiga) dalam menghadapi Tugas Akhir.</div>
                        <div class="display-3 mb-2 mb-sm-2 mb-md-3 header-beranda">PERSYARATAN LSTA</div>
                        <h4>Beberapa persyaratan yang harus dipenuhi untuk menjadi peserta LSTA.</h4>
                    </div>
                    <div class="col-md-12 col-lg-12 col-xl-6 text-center mt-4 mt-sm-4 mt-md-5">
                        <div class="display-3 mb-2 mb-sm-2 mb-md-3 header-beranda">PENYAJI</div>
                        <h3>Biaya Pendaftaran : Rp 25.000,00</h3>
                        <ul class="text-left">
					        <li class="black"><b>Surat Maju Sidang</b> lengkap dengan <b>tanda tangan dosen pembimbing</b></li>
					        <li class="black"><b>Sertifikat Pendengar</b> LSTA (1 sertifikat)</li>
					        <li class="black">Abstraksi lengkap dengan <b>NAMA, NRP, serta JUDUL TUGAS AKHIR</b> (dikumpulkan sebanyak 30 lembar dimasukkan ke map cokelat)</li>
					        <li class="black">PPT untuk Presentasi LSTA dengan format <b>NRP_NAMA_[Pengiriman ke berapa]</b></li>
				        </ul>
                    </div>
                    <div class="col-md-12 col-lg-12 col-xl-6 text-center mt-4 mt-sm-4 mt-md-5">
                        <div class="display-3 mb-2 mb-sm-2 mb-md-3 header-beranda">Pendengar</div>
                        <h3>Biaya Pendaftaran : Rp 25.000,00</h3>
                        <ul class="text-left">
					        <li class="black">Sudah menempuh <b>90 SKS</b></li>
					        <li class="black">Bagi mahasiswa yang memiliki <b>Kartu Biru</b>, kartu tersebut dapat dilampirkan dalam form pendaftaran</li>
				        </ul>
                    </div>
                </div>
            </div>
        </div>
        
    </section>
    
@endsection