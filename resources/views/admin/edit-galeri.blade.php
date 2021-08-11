@extends('layout.admin')
    <link rel="stylesheet" href="{{ asset('assets/css/admin-edit-gallery.css') }}">
    <style>
        .btn-cancel, .btn-submit {
            cursor: pointer;
            transition: 0.5s;
        }

        .btn-cancel:hover { background: #EAEAEA !important; }
        .btn-submit:hover { background: #850FC1 !important; }
    </style>
@section('content')
    <div class="container-fluid pl-5 pr-5 pt-3" style="height: 100vh; overflow-y: auto">
        <div class="gallery-wrapper pt-5">
            <form action="{{ route('update-galeri') }}" method="post">
                @csrf
                <input type="hidden" name="id_acara" value="{{ $detil_galeri[0]->id_acara }}">
                <div class="h1 poppins-normal text-center custom-text-color font-weight-bold mb-5">{{ $detil_galeri[0]->nama_galeri }}</div>

                <div class="row">
                    <div class="col-6">
                        @if (session('status'))
                            <div class="alert alert-success" style="width: fit-content">
                                <span class="h6">{{ session('status') }}</span>
                            </div>
                        @endif
                    </div>

                    <div class="col-6 text-right">
                        <button type="button" onclick="cancel()" class="h5 poppins-normal border-0 btn-cancel mr-3" style="background: none; padding: 12px 20px; border-radius: 5px; color: #9932CC">Cancel</button>
                        <input type="submit" name="submit" value="Update" class="h5 poppins-normal border-0 text-white btn-submit" style="background: #9932CC; border-radius: 5px; padding: 12px 20px">
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-12 h4 poppins-normal custom-text-color mb-4">Deskripsi Galeri</div>
                    <div class="col-12 mb-5">
                        <textarea name="deskripsi_galeri" rows="10" style="width: 100%; resize: none;" class="p-3 poppins-normal h6">{{ $detil_galeri[0]->deskripsi_galeri }}</textarea>
                    </div>

                    <div class="col-12 h4 poppins-normal custom-text-color mb-4">Tambah Gambar</div>
                    <div class="col-12 h6 poppins-normal custom-text-color mb-5"><input type="file" name="" id="" disabled> <i>(Pay $2.99 to unlock this feature)</i></div> 
                    
                    <!-- Input image -->

                    <div class="col-12 h4 poppins-normal custom-text-color mb-4">Daftar Gambar</div>
                    <div class="col-12">
                        <!-- Gambar -->
                        <div class="row" id="daftar-galeri">
                            @foreach($detil_galeri as $g)
                                <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-4 p-3 img-gallery">
                                    <img class="rounded-0 img-image w-100" src="{{ asset('assets/img/galeri/'.str_replace(' ', '_', strtolower($g->nama_galeri)).'/'.$g->link.'') }}" alt="event-ksm">
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection

@section('javascript')
    <script>
        $('#nav-galeri').addClass('active');

        const cancel = (() => window.location = "/admin/galeri")
    </script>
@endsection