@extends('layout.client')

@section('content')
<section>
            <div class="container" id="acara">
            
                <div class="acara-wrapper h4 text-white pt-5 pb-5">
                        <div class="col-12 text-center">
                            <div class="display-3 mb-5 header-beranda">{{str_replace('-', ' ', strtolower($acara))}} </div>
                        </div>

                        <!-- Blade acara -->
                            <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                                <div class="card w-100 h-100 m-0">
                                <div class="mt-4 text-left" style="margin-bottom: 20px !important;margin-left:20px!important ">
                                            <img style="width:20px" src="https://cdn4.iconfinder.com/data/icons/small-n-flat/24/calendar-512.png" alt="kalender" class="kalender-icon">
                                            <span class="ml-2 font-weight-bold event-text"> {{$deskripsi[0]->tanggal_acara}}</span>
                                        </div>
                                <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
        @foreach ($foto as $key => $f)
            @if($key == 0)
            <div class="carousel-item active">
                <img class="d-block w-100" src="{{ asset('assets/img/galeri/'.str_replace('-', '_', strtolower($acara)).'/'.$f->link_gambar.'') }}" alt="{{$f->link_gambar}}">
            </div>
            @else
            <div class="carousel-item">
                <img class="d-block w-100" src="{{ asset('assets/img/galeri/'.str_replace('-', '_', strtolower($acara)).'/'.$f->link_gambar.'') }}" alt="{{$f->link_gambar}}">
            </div>
            @endif
        @endforeach
    </div>
    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
    </div>
    
                                    <div class="card-body p-4 text-left">
                                    
                                        <p class="card-text h4 event-text">{{$deskripsi[0]->deskripsi_galeri}}</p>
                                    </div>
                                </div>
                            </div>
                        
                </div>
            </div>
        </section>
        @endsection