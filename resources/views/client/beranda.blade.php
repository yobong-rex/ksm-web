@extends('layout.client')

<link rel="stylesheet" href="{{ asset('assets/css/beranda.css') }}">

@section('content')
    <section>
        <div class="container" id="introduction">
            <div class="introduction-wrapper mt-3 mt-sm-3 mt-md-4 pt-5 pb-3 pb-sm-3 pb-md-5 h4 text-white">
                <div class="row mt-4">
                    <div class="col-12 text-center">
                        <div class="display-3 mb-2 mb-sm-2 mb-md-3 header-beranda">Tentang Kami</div>
                        <div class="p-3 p-sm-3 p-md-4 pt-4 content-text">{{ $info->tentang }}</div>
                    </div>

                    <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-6 text-center mt-4 mt-sm-4 mt-md-5">
                        <div class="display-3 mb-2 mb-sm-2 mb-md-3 header-beranda">Visi</div>
                        <div class="p-3 p-sm-3 p-md-4 pt-4 content-text">{{ $info->visi }}</div>
                    </div>

                    <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-6  mt-4 mt-sm-4 mt-md-5">
                        <div class="display-3 mb-2 mb-sm-2 mb-md-3 header-beranda text-center">Misi</div>
                        <div class="p-3 p-sm-3 p-md-4 pt-4 content-text" ><?php echo $info->misi?></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container">
            <div class="struktur-organisasi-wrapper mt-0 mt-sm-0 mt-md-5 pt-5 pb-5 h4 text-white">
                <div class="row">
                    <div class="col-12 text-center">
                        <div class="display-3 mb-4 mb-sm-4 mb-md-5 header-beranda">Struktur Organisasi</div>
                    </div>

                    @foreach ($pengurus as $p)
                        <div class="col-12 col-sm-12 col-md-6 col-lg-6 text-center mt-4 mt-sm-4 mt-md-5 mb-3">
                            <div><img src="{{ asset('assets/img/foto_anggota/'.$p->foto_profil.'') }}" alt="{{ $p->nama_jabatan }} KSM IF" class="w-75"></div>
                            <div class="h3 font-weight-bold text-white mt-4 mb-1 mb-sm-1 mb-md-2 nama-jabatan-text">{{ $p->nama }}</div>
                            <div class="h3 text-white mb-2 mb-sm-2 mb-md-3 nama-jabatan-text">{{ $p->nama_jabatan }} KSM IF</div>
                        </div>
                    @endforeach

                    <div class="col-12 text-center p-4">
                        <a href="{{ route('struktur-organisasi') }}" class="btn btn-primary font-weight-bold mt-3 h1 p-3 pl-5 pr-5" style="font-size: 18px">LIHAT SELENGKAPNYA</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container" id="acara">
            <div class="acara-wrapper h4 text-white pt-5 pb-5">
                <div class="row justify-content-center">
                    <div class="col-12 text-center">
                        <div class="display-3 mb-5 header-beranda">Acara</div>
                    </div>

                    <!-- Blade acara -->
                    @if(count($acara)>0)
                        @foreach ($acara as $a)
                            <div class="col-11 col-sm-11 col-md-6 col-lg-6 col-xl-4 acara-card p-3">
                                <div class="card w-100 h-100 m-0">
                                    <img class="card-img-top" src="{{ asset('assets/img/event/'.$a->link_gambar.'') }}" alt="{{ str_replace(' ', '-', strtolower($a->nama)) }}">
                                    <div class="card-body p-4">
                                        <div class="card-title mb-3 mt-2 h3 font-weight-bold event-header">{{ $a->nama }}</div>
                                        <p class="card-text h4 event-text">{{ $a->deskripsi }}</p>

                                        <div class="mt-4" style="margin-bottom: 80px !important">
                                            <img src="{{ asset('assets/img/kalender.png') }}" alt="kalender" class="kalender-icon">
                                            <span class="ml-2 font-weight-bold event-text">{{ $a->tanggal_acara }}</span>
                                        </div>

                                        @if ($a->daftar)
                                            <a href="/acara/{{ str_replace(' ', '-', strtolower($a->nama)) }}" class="btn btn-primary font-weight-bold btn-daftar ml-4 mb-3">Read More</a>
                                        @else
                                            <a class="btn btn-primary font-weight-bold btn-daftar ml-4 mb-3">Read More</a>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @else
                        <div class='display-3 mb-5 header-beranda'>Maaf saat ini tidak ada acara</div>
                    @endif
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container">
            <div class="galeri-wrapper h4 text-white pt-5 mt-4">
                <div class="row justify-content-center">
                    <div class="col-12 text-center">
                        <div class="display-3 mb-4 mb-sm-4 mb-md-4 header-beranda">Galeri</div>
                        <div class="h3 text-white mb-5 mb-sm-4 mb-md-5 subheader-galeri">Persembahan dari KSM Informatika selama 1 periode</div>
                    </div>

                    @foreach($galeri as $g)
                        <div class="col-10 col-sm-10 col-md-5 col-lg-5 col-xl-4 p-0 bg-dark img-gallery">
                            <a href="/galeri/@php echo str_replace(' ', '-', strtolower($g->nama)).'-'.$g->tahun; @endphp">
                                <img class="rounded-0 img-image" src="{{ asset('assets/img/galeri/'.str_replace(' ', '_', strtolower($g->nama)).'_'.$g->tahun.'/'.$g->thumbnail.'') }}" alt="event-ksm">
                                <div class="h3 text-white text-image font-weight-bold text-center">{{ $g->nama }} {{ $g->tahun }}</div>
                            </a>
                        </div>
                    @endforeach

                    <div class="col-12 text-center p-5">
                        <a href="{{ route('all-galeri') }}" class="btn btn-primary font-weight-bold mt-3 h1 p-3 pl-5 pr-5" style="font-size: 18px">LIHAT SELENGKAPNYA</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script>
        $(document).ready(function() {
            $('#get-started').removeClass('d-none');
        });
    </script>

@endsection