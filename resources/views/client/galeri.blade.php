@extends('layout.client')

@section('content')
<section>
            <div class="container" id="acara">
            
                <div class="acara-wrapper h4 text-white pt-5 pb-5">
                        <div class="col-12 text-center">
                            <div class="display-3 mb-5 header-beranda">Workshop Python </div>
                        </div>

                        <!-- Blade acara -->
                            <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                                <div class="card w-100 h-100 m-0">
                                <div class="mt-4 text-left" style="margin-bottom: 20px !important;margin-left:20px!important ">
                                            <img style="width:20px" src="https://cdn4.iconfinder.com/data/icons/small-n-flat/24/calendar-512.png" alt="kalender" class="kalender-icon">
                                            <span class="ml-2 font-weight-bold event-text"> 8 Nopember 2020</span>
                                        </div>
                                <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
        <img class="d-block w-100" src="https://ksm-if-ubaya.com/assets/img/acara3/3.png" alt="First slide">
        </div>
        <div class="carousel-item">
        <img class="d-block w-100" src="https://ksm-if-ubaya.com/assets/img/acara3/5.png" alt="Second slide">
        </div>
        <div class="carousel-item">
        <img class="d-block w-100" src="https://ksm-if-ubaya.com/assets/img/acara3/1.png" alt="Third slide">
        </div>
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
                                    
                                        <p class="card-text h4 event-text">Workshop Python merupakan kegiatan berbentuk 
                                        workshop/pelatihan untuk membuat suatu project aplikasi tertentu dengan bahasa 
                                        pemrograman Phyton yang dibawakan oleh seorang tutor yang ahli di bidang Bahasa 
                                        Pemrogramman Python. Kegiatan Workshop Python dibawakan oleh Bapak Setia Budi, 
                                        Ph.D. sebagai Maranatha Christian University Lecturer. Pembicara memberikan sebuah 
                                        materi dan praktik bahasa pemrograman Python dengan tema “Shine Your Day With Knowledge” 
                                        yang diberikan secara online via Zoom.</p>
                                    </div>
                                </div>
                            </div>
                        
                </div>
            </div>
        </section>
        @endsection