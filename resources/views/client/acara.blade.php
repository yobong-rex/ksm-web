    @extends('layout.client')

    @section('content')

    <section>
            <div class="container" id="acara">
            
                <div class="acara-wrapper h4 text-white pt-5 pb-5">
                        <div class="col-12 text-center">
                            <div class="display-3 mb-5 header-beranda">{{$acara[0]->nama}}</div>
                            
                        </div>

                        <!-- Blade acara -->
                            <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                                <div class="card w-100 h-100 m-0">
                                <div class="mt-4 text-left " style="margin-bottom: -20px !important;margin-left: 20px !important ">
                                            <img style="width:20px" src="http://smkn5batam.sch.id/wp-content/uploads/2020/04/POSTERCORONA2.jpg" alt="kalender" class="kalender-icon">
                                            <span class="ml-2 font-weight-bold event-text"> {{$acara[0]->tanggal_acara}}</span>
                                        </div>
                <div class="row ">
                    <div class=" col-md-12 col-lg-12 col-xl-6 text-center mt-4 mt-sm-4 mt-md-5 ">
                    <img class="d-block w-100" src="{{ asset('assets/img/event/'.$acara[0]->link_gambar.'') }}" alt="First slide">
                    </div>
                    <div class="col-md-12 col-lg-12 col-xl-6 mt-4 mt-sm-4 mt-md-5  ">
                    <p class="card-text h4 event-text desk" style="text-align:justify">{{$acara[0]->deskripsi}}</p>
                                            <div class="row">
                    <div class=" col-md-12 col-lg-12 col-xl-6 text-center" style="padding:20px 0px">
                    <p class="card-text h4 event-text"><b> Open Registration</b></p>
                    <p>27/8/2021</p>

                    </div>
                    <div class="col-md-12 col-lg-12 col-xl-6 text-center" style="padding:20px 0px">
                    <p class="card-text h4 event-text"><b>Close Registraion</b></p>
                    <p>27/9/2021</p>

                    </div>
                </div>     
                
                <div class="text-center"><p class="card-text h4 event-text" style="padding:20px 0px"><b>Contact Person :</b> 085213543214 (WA)</p>
                <a href="/pendaftaran/{{ str_replace(' ', '-', strtolower($acara[0]->nama)) }}" class="btn btn-primary font-weight-bold btn-daftar text-center ml-4 mb-3" style="margin: 20px 0px ">Daftar</a>
</div>
            </div>
                                        </div>
                    
                </div>        
                  
                                </div>
                            </div>
                        
                </div>
            </div>
        </section>
@endsection