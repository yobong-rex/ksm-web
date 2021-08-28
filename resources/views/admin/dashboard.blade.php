@extends('layout.admin')
<link rel="stylesheet" href="{{ asset('assets/css/admin-dashboard.css') }}">
@section('content')
    <div class="container-fluid" style="height: 100vh; overflow-y: auto">
        <div class="dashboard-wrapper pt-5 pl-3 pr-3 poppins-normal h6 custom-text-color">
            <!-- Shortcut Section Top -->
            <div class="row justify-content-center">
                <!-- Struktur Shortcut -->
                <div class="col-12 col-sm-6 p-3 box-wrapper">
                    <div class="card w-100 h-100 bg-white dashboard-box pt-5 pb-5">
                        <div class="card-body text-center d-flex flex-column justify-content-center align-items-center">
                            <div id="jumlah-anggota" class="h3 mb-3 font-weight-bold">{{ $jumlah_anggota }} Anggota</div>
                            <div id="daftar-divisi" class="h6" style="line-height: 1.5rem;">dari {{ $jumlah_divisi }} divisi yang tersedia</div>
                            <div class="card-footer-text mb-3 mr-4"><a href="{{ route('admin-struktur') }}" class="go-button font-weight-bold">Lihat struktur ></a></div>
                        </div>
                    </div>
                </div>

                <!-- Galeri Shortcut -->
                <div class="col-12 col-sm-6 p-3 box-wrapper">
                    <div class="card w-100 h-100 bg-white dashboard-box pt-5 pb-5">
                        <div class="card-body text-center d-flex flex-column justify-content-center align-items-center">
                            <div id="jumlah-gambar" class="h3 mb-3 font-weight-bold">{{ $jumlah_foto }} Foto</div>
                            <div id="jumlah-proker-selesai" class="h6" style="line-height: 1.5rem;">dari {{ $jumlah_proker_selesai }} proker yang telah selesai</div>
                            <div class="card-footer-text mb-3 mr-4"><a href="{{ route('admin-galeri') }}" class="go-button font-weight-bold">Lihat galeri ></a></div>
                        </div>
                    </div>
                </div>

                <!-- Bursa Shortcut -->
                <div class="col-12 p-3 box-wrapper-bursa">
                    <div class="card w-100 h-100 bg-white dashboard-box pt-5 pb-5">
                        <div class="card-body text-center d-flex flex-column justify-content-center align-items-center">
                            <div id="bursa-soal" class="h3 mb-3 font-weight-bold">Bursa Soal</div>
                            <div id="bursa-soal-deskripsi" class="h6" style="line-height: 1.5rem;">
                                <span class="mb-2" style="display: block"><b>Link Soal :</b> <a href="{{ $bursa_soal[0]->link_soal }}" target="_blank">{{ $bursa_soal[0]->link_soal }}</a></span>
                                <b>Link Kuisioner :</b> <a href="{{ $bursa_soal[0]->link_kuisioner }}" target="_blank">{{ $bursa_soal[0]->link_kuisioner }}</a>
                            </div>
                            <div class="card-footer-text mb-3 mr-4"><a href="{{ route('admin-bursa-soal') }}" class="go-button font-weight-bold">Atur bursa ></a></div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Shortcut Section Bottom -->
            <div class="row justify-content-center">
                <!-- Acara Shortcut -->
                <div class="col-12 box-table-wrapper p-3">
                    <div class="card w-100 h-100 bg-white dashboard-box">
                        <div class="card-body p-4">
                            <!-- Tabel Daftar Target Acara (nama, jumlah pendaftar, target pendaftar, status) -->
                            <div class="mb-5" style="overflow: auto">
                                <table class="table text-center">
                                    <thead class="text-uppercase" style="background: #9932CC">
                                        <tr class="text-white text-capitalize">
                                            <th scope="col">Nama Acara</th>
                                            <th scope="col">Tanggal Acara</th>
                                            <th scope="col">Contact Person</th>
                                            <th scope="col">Status Acara</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($acara as $a)
                                            <tr>
                                                <td>{{ $a->nama }}</td>
                                                <td>{{ $a->tanggal_acara }}</td>
                                                <td>{{ 'rickyandrean99' }}</td> <!-- pasang contact person disini @yobong -->

                                                @if ($a->selesai)
                                                    <td>Selesai</td>
                                                @else
                                                    @if ($a->daftar)
                                                        <td>Open Regis</td>
                                                    @else
                                                        <td>Belum Dibuka</td>
                                                    @endif
                                                @endif
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <div class="card-footer-text mb-3 mr-4"><a href="{{ route('admin-acara') }}" class="go-button font-weight-bold">Lihat acara ></a></div>
                        </div>
                    </div>
                </div>

                <!-- Info Shortcut -->
                <div class="col-12 box-info-wrapper p-3">
                    <div class="card w-100 h-100 bg-white dashboard-box">
                        <div class="card-body">
                            <div class="h3 m-2 mb-5 font-weight-bold text-center">Informasi KSM IF</div>
                            <div class="h5 font-weight-bold mb-3">Tentang</div>
                            <div class="h6" style="line-height: 1.5rem;">{{ $info[0]->tentang }}</div>
                            <div class="h5 font-weight-bold mt-4 mb-3">Visi</div>
                            <div class="h6" style="line-height: 1.5rem;">{{ $info[0]->visi }}</div>
                            <div class="h5 font-weight-bold mt-4 mb-3">Misi</div>
                            <div class="h6 mb-5" style="line-height: 1.5rem;">{{ $info[0]->misi }}</div>
                            <div class="card-footer-text mb-3 mr-4"><a href="{{ route('admin-info-ksm') }}" class="go-button font-weight-bold">Edit info ></a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('javascript')
    <script>
        $('#nav-dashboard').addClass('active');
    </script>
@endsection