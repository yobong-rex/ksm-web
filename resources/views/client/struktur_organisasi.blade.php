@extends('layout.client')
<style>
@media only screen and (max-width: 720px) {
  .koor {
    width:75%!important;
  }
  .koor{
      width:25%;
  }
}
</style>
@section('content')
        <div class="container">
        
            <div class="struktur-organisasi-wrapper mt-0 mt-sm-0 mt-md-5 pt-5 pb-5 h4 text-white">
            <div class="col-12 text-center p-4">
                        <a href="#" class="btn btn-primary font-weight-bold mt-3 h1 p-3 pl-5 pr-5" style="font-size: 18px">BPH</a>
                        <a href="#" class="btn btn-primary font-weight-bold mt-3 h1 p-3 pl-5 pr-5" style="font-size: 18px">Eksternal</a>
                        <a href="#" class="btn btn-primary font-weight-bold mt-3 h1 p-3 pl-5 pr-5" style="font-size: 18px">Internal</a>
                        <a href="#" class="btn btn-primary font-weight-bold mt-3 h1 p-3 pl-5 pr-5" style="font-size: 18px">Information</a>
                        <a href="#" class="btn btn-primary font-weight-bold mt-3 h1 p-3 pl-5 pr-5" style="font-size: 18px">Operasional</a>

                    </div>
                <div class="row">
                    <div class="col-12 text-center">
                        <div class="display-3 mb-4 mb-sm-4 mb-md-5 header-beranda">Struktur Organisasi</div>
                        <div class="header-beranda" id="divisi"> <h2>BPH</h2></div>
                    </div>
                    <!-- BPH Start -->
                    <!-- <div class="struktur-organisasi-wrapper mt-0 mt-sm-0 mt-md-5 pt-5 pb-5 h4 text-white">
                    @foreach ($pengurus as $p)
                        <div class="col-12 col-sm-12 col-md-6 col-lg-6 text-center mt-4 mt-sm-4 mt-md-5 mb-3">
                            <div><img src="{{ asset('assets/img/foto_anggota/'.$p->foto_profil.'') }}" alt="{{ $p->nama_jabatan }} KSM IF" class="w-75"></div>
                            <div class="h3 font-weight-bold text-white mt-4 mb-1 mb-sm-1 mb-md-2 nama-jabatan-text">{{ $p->nama }}</div>
                            <div class="h3 text-white mb-2 mb-sm-2 mb-md-3 nama-jabatan-text">{{ $p->nama_jabatan }} KSM IF</div>
                        </div>
                    @endforeach
                    </div> -->
                    

                    <!-- Divisi Selain BPH Start -->
                    <div class="col-6 col-sm-6 col-md-6 col-lg-6 text-center mt-4 mt-sm-4 mt-md-5 mb-3">
                            <div><img src="https://www.vhv.rs/dpng/d/256-2569650_men-profile-icon-png-image-free-download-searchpng.png" alt="Koor Information"class="w-75"></div>
                            <div class="h3 font-weight-bold text-white mt-4 mb-1 mb-sm-1 mb-md-2 nama-jabatan-text">Yobong</div>
                            <div class="h3 text-white mb-2 mb-sm-2 mb-md-3 nama-jabatan-text">Koordinasi Information</div>
                        </div>
                        <div class="col-6 col-sm-6 col-md-6 col-lg-6 text-center mt-4 mt-sm-4 mt-md-5 mb-3">
                            <div><img src="https://www.vhv.rs/dpng/d/256-2569650_men-profile-icon-png-image-free-download-searchpng.png" alt="Koor Information"class="w-75"></div>
                            <div class="h3 font-weight-bold text-white mt-4 mb-1 mb-sm-1 mb-md-2 nama-jabatan-text">Yobong</div>
                            <div class="h3 text-white mb-2 mb-sm-2 mb-md-3 nama-jabatan-text">Wakil Koordinasi Information</div>
                        </div>
                        </div>
                        <div class="row">
                        <div class="col-6 col-sm-6 col-md-3 col-lg-3 text-center mt-4 mt-sm-4 mt-md-5 mb-3">
                            <div><img src="https://www.vhv.rs/dpng/d/256-2569650_men-profile-icon-png-image-free-download-searchpng.png" alt="Koor Information" class="w-75"></div>
                            <div class="h3 font-weight-bold text-white mt-4 mb-1 mb-sm-1 mb-md-2 nama-jabatan-text">Yobong</div>
                            <div class="h3 text-white mb-2 mb-sm-2 mb-md-3 nama-jabatan-text">Anggota</div>
                        </div>
                        <div class="col-6 col-sm-6 col-md-3 col-lg-3 text-center mt-4 mt-sm-4 mt-md-5 mb-3">
                            <div><img src="https://www.vhv.rs/dpng/d/256-2569650_men-profile-icon-png-image-free-download-searchpng.png" alt="Koor Information" class="w-75"></div>
                            <div class="h3 font-weight-bold text-white mt-4 mb-1 mb-sm-1 mb-md-2 nama-jabatan-text">Yobong</div>
                            <div class="h3 text-white mb-2 mb-sm-2 mb-md-3 nama-jabatan-text">Anggota</div>
                        </div>
                        <div class="col-6 col-sm-6 col-md-3 col-lg-3 text-center mt-4 mt-sm-4 mt-md-5 mb-3">
                            <div><img src="https://www.vhv.rs/dpng/d/256-2569650_men-profile-icon-png-image-free-download-searchpng.png" alt="Koor Information" class="w-75"></div>
                            <div class="h3 font-weight-bold text-white mt-4 mb-1 mb-sm-1 mb-md-2 nama-jabatan-text">Yobong</div>
                            <div class="h3 text-white mb-2 mb-sm-2 mb-md-3 nama-jabatan-text">Anggota</div>
                        </div>
                        <div class="col-6 col-sm-6 col-md-3 col-lg-3 text-center mt-4 mt-sm-4 mt-md-5 mb-3">
                            <div><img src="https://www.vhv.rs/dpng/d/256-2569650_men-profile-icon-png-image-free-download-searchpng.png" alt="Koor Information" class="w-75"></div>
                            <div class="h3 font-weight-bold text-white mt-4 mb-1 mb-sm-1 mb-md-2 nama-jabatan-text">Yobong</div>
                            <div class="h3 text-white mb-2 mb-sm-2 mb-md-3 nama-jabatan-text">Anggota</div>
                        </div>
                    </div>
                    
                </div>
        </div>
@endsection