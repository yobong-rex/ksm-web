@extends('layout.admin')
    <style>
        .galeri-box {
            background: #D02BBC;
            transition: 0.5s;
        }

        .galeri-box:hover {
            background: #9932CC;
            transform: scale(1.1);
        }
    </style>
@section('content')
    <div class="container-fluid m-0 p-0" style="height: 100vh; overflow-y: auto">
        <div class="gallery-wrapper p-5 container-fluid">
            <div class="h2 poppins-normal text-center custom-text-color font-weight-bold mb-5">Galeri KSM Informatika</div>
            
            <!-- Galeri -->
            <div class="row justify-content-center" id="daftar-galeri">
                @foreach($galeri as $g)
                    <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-3 p-0 p-3" style="height: 200px;">
                        <a href="/admin/galeri/{{ $g->id }}/@php echo str_replace(' ', '-', strtolower($g->nama)).'-'.$g->tahun; @endphp">
                            <div class="h-100 d-flex align-items-center justify-content-center h5 text-white text-center poppins-normal galeri-box" style="border-radius: 5px;">{{ $g->nama }} {{ $g->tahun }}</div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection

@section('javascript')
    <script>
        $('#nav-galeri').addClass('active');
    </script>
@endsection