@extends('layout.client')
<link rel="stylesheet" href="{{ asset('assets/css/beranda.css') }}">
@section('content')
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

            </div>
        </div>
    </div>
@endsection