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
                        <button href="" onclick="divisi('1')" class="btn btn-primary font-weight-bold mt-3 h1 p-3 pl-5 pr-5" style="font-size: 18px">BPH</button>
                        <button href="" onclick="divisi('4')" class="btn btn-primary font-weight-bold mt-3 h1 p-3 pl-5 pr-5" style="font-size: 18px">Eksternal</button>
                        <button href="" onclick="divisi('3')" class="btn btn-primary font-weight-bold mt-3 h1 p-3 pl-5 pr-5" style="font-size: 18px">Internal</button>
                        <button href="" onclick="divisi('5')" class="btn btn-primary font-weight-bold mt-3 h1 p-3 pl-5 pr-5" style="font-size: 18px">Information</button>
                        <button href="" onclick="divisi('2')" class="btn btn-primary font-weight-bold mt-3 h1 p-3 pl-5 pr-5" style="font-size: 18px">Operasional</button>

                    </div>
                <div class="row">
                    <div class="col-12 text-center">
                        <div class="display-3 mb-4 mb-sm-4 mb-md-5 header-beranda">Struktur Organisasi</div>
                        <div class="header-beranda text-white h1" id="divisi"> BPH</div>
                    </div>
                    <!-- BPH Start -->
                    <div class="row" id="struktur">
                    @foreach ($pengurus as $p)
                        <div class="col-6 col-sm-6 col-md-6 col-lg-6 text-center mt-4 mt-sm-4 mt-md-5 mb-3">
                                <div><img src="{{ asset('assets/img/foto_anggota/'.$p->foto_profil.'') }}" alt="{{ $p->nama_jabatan }} KSM IF"class="w-75"></div>
                                <div class="h3 font-weight-bold text-white mt-4 mb-1 mb-sm-1 mb-md-2 nama-jabatan-text">{{ $p->nama }}</div>
                                <div style="font-size: 120%;" class="h4 text-white mb-2 mb-sm-2 mb-md-3 nama-jabatan-text">{{ $p->nama_jabatan }} KSM IF</div>
                                <div class="h4 text-white mb-2 mb-sm-2 mb-md-3 nama-jabatan-text">{{ $p->nrp }}</div>
                        </div>
                    @endforeach
                    </div>
                    
                     <!-- Divisi Selain BPH Start -->
                    <div class="row d-none">
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
                            <!-- </div> -->
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
                   
                    
        </div>
    </div>

    <script>
        function divisi(id_divisi){
            $.ajax({
				type: 'POST',
				url:'{{ route("struktur-ambil") }}',
				data: {
					'_token':'<?php echo csrf_token() ?>',
                    'id_divisi':id_divisi
				},
				success: function(data){
                   
                    $('#struktur').html('');
                    if(data.msg=="bph"){
                        $('#divisi').html(data.bph[0].divisi);
                        $.each(data.bph, function(key,value){
                            $('#struktur').append(`<div class="col-6 col-sm-6 col-md-6 col-lg-6 text-center mt-4 mt-sm-4 mt-md-5 mb-3">
                                <div><img src="{{ asset('assets/img/foto_anggota/`+data.bph[key].foto_profil+`') }}" alt=" `+data.bph[key].nama_jabatan+` KSM IF"class="w-75"></div>
                                <div class="h3 font-weight-bold text-white mt-4 mb-1 mb-sm-1 mb-md-2 nama-jabatan-text"> `+data.bph[key].nama+` </div>
                                <div style="font-size: 120%;" class="h4 text-white mb-2 mb-sm-2 mb-md-3 nama-jabatan-text"> `+data.bph[key].nama_jabatan+`  KSM IF</div>
                                <div class="h4 text-white mb-2 mb-sm-2 mb-md-3 nama-jabatan-text"> `+data.bph[key].nrp+` </div>
                        </div>`)
                        })
                    }
                    else if(data.msg=="selain bph"){
                        $('#divisi').html(data.koor_wakoor[0].divisi);
                        $.each(data.koor_wakoor, function(key,value){
                            var jabatan = data.koor_wakoor[key].jabatan+' '+data.koor_wakoor[key].divisi;
                            $('#struktur').append(`<div class="col-6 col-sm-6 col-md-6 col-lg-6 text-center mt-4 mt-sm-4 mt-md-5 mb-3">
                                <div><img src="{{ asset('assets/img/foto_anggota/`+data.koor_wakoor[key].foto_profil+`') }}" alt=" `+jabatan+` KSM IF"class="w-75"></div>
                                <div class="h3 font-weight-bold text-white mt-4 mb-1 mb-sm-1 mb-md-2 nama-jabatan-text"> `+data.koor_wakoor[key].nama+` </div>
                                <div style="font-size: 120%;" class="h4 text-white mb-2 mb-sm-2 mb-md-3 nama-jabatan-text"> `+jabatan+`</div>
                                <div class="h4 text-white mb-2 mb-sm-2 mb-md-3 nama-jabatan-text"> `+data.koor_wakoor[key].nrp+` </div>
                        </div>`);
                        });
                        $('#struktur').append('<div class="row">');
                        $.each(data.anggota, function(key,value){
                            var jabatan = data.anggota[key].nama_jabatan+' '+data.anggota[key].divisi;
                            $('#struktur').append(`<div class="col-6 col-sm-6 col-md-3 col-lg-3 text-center mt-4 mt-sm-4 mt-md-5 mb-3">
                                    <div><img src="{{ asset('assets/img/foto_anggota/`+data.anggota[key].foto_profil+`') }}" alt="`+jabatan+`" class="w-75"></div>
                                    <div class="h3 font-weight-bold text-white mt-4 mb-1 mb-sm-1 mb-md-2 nama-jabatan-text"> `+data.anggota[key].nama+` </div>
                                    <div style="font-size: 120%;" class="h4 text-white mt-4 mb-1 mb-sm-1 mb-md-2 nama-jabatan-text">`+jabatan+`</div>
                                    <div class="h4 text-white mb-2 mb-sm-2 mb-md-3 nama-jabatan-text"> `+data.anggota[key].nrp+` </div>
                                </div>`)
                        });
                        $('#struktur').append('</div>');
                    }				
				}
			});
        }
    </script>
@endsection