@extends('layout.admin')
    <link rel="stylesheet" href="{{ asset('assets/css/admin-gallery.css') }}">
@section('content')
    <div class="container-fluid m-0 p-0" style="height: 100vh; overflow-y: auto">
        <div class="gallery-wrapper pt-5 container">
            <div class="h2 poppins-normal text-center custom-text-color font-weight-bold mb-5">Galeri KSM Informatika</div>
            
            <!-- Galeri -->
            <div class="row justify-content-center" id="daftar-galeri">
                @foreach($galeri as $g)
                    <div class="col-10 col-sm-10 col-md-5 col-lg-5 col-xl-4 p-0 bg-dark img-gallery">
                        <a href="/admin/galeri/@php echo str_replace(' ', '-', strtolower($g->nama)); @endphp">
                            <img class="rounded-0 img-image" src="{{ asset('assets/img/galeri/'.str_replace(' ', '_', strtolower($g->nama)).'/'.$g->thumbnail.'') }}" alt="event-ksm">
                            <div class="h4 text-white text-image text-center font-weight-bold poppins-normal">{{ $g->nama }}</div>
                        </a>
                    </div>
                @endforeach
            </div>

            <div class="text-center p-5">
                <a class="btn font-weight-bold mt-3 h1 p-3 pl-5 pr-5 text-white" style="font-size: 20px; background: #9932CC" onclick="loadMoreGallery()">Muat Lebih Banyak</a>
            </div>
        </div>
    </div>
@endsection

@section('javascript')
    <script>
        $('#nav-galeri').addClass('active');

        let galleryAmount = 3;
        const loadMoreGallery = (() => {
            $.ajax({
				type: 'POST',
				url:'{{ route("muat-galeri") }}',
				data: {
					'_token':'<?php echo csrf_token() ?>',
                    'galleryAmount': galleryAmount
				},
				success: function(data){
                    data.galeri.map((element) => {
                        let folderName = element.nama.toLowerCase().replace(' ', '_')
                        let thumbnail = element.thumbnail
                        let link = element.nama.toLowerCase().replace(' ', '-')
                        
                        // $('#daftar-galeri').append("<div class='col-10 col-sm-10 col-md-5 col-lg-5 col-xl-4 p-0 bg-dark img-gallery'><a href='/admin/galeri/" + link + "'><img class='rounded-0 img-image' src='../assets/img/galeri/" + folderName + "/" + thumbnail + "' alt='event-ksm'><div class='h4 text-white text-image text-center font-weight-bold poppins-normal'>" + element.nama + "</div></a></div>")
                        
                        // $('#daftar-galeri').append("<div class='col-10 col-sm-10 col-md-5 col-lg-5 col-xl-4 p-0 bg-dark img-gallery'><a href='/admin/galeri/" + link + "'><img class='rounded-0 img-image' src='../assets/img/galeri/"+folderName+"/"+thumbnail+"')' alt='event-ksm'><div class='h4 text-white text-image text-center font-weight-bold poppins-normal'>" + element.nama + "</div></a></div>")

                        galleryAmount++
                    })
				}
			});
        })
    </script>
@endsection