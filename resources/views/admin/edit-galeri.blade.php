@extends('layout.admin')
    <link rel="stylesheet" href="{{ asset('assets/css/admin-edit-gallery.css') }}">
    <style>
        .btn-cancel, .btn-submit {
            cursor: pointer;
            transition: 0.5s;
        }

        .btn-cancel:hover { background: #EAEAEA !important; }
        .btn-submit:hover { background: #850FC1 !important; }

        #upload-image {
            opacity: 0;
            position: absolute;
            z-index: -1;
        }

        div#add-image-section::-webkit-scrollbar { width: 15px; }
        div#add-image-section::-webkit-scrollbar-track { background: #f1f1f1; }
        div#add-image-section::-webkit-scrollbar-thumb { background: #D02BBC; }
        div#add-image-section::-webkit-scrollbar-thumb:hover { background: #9932CC; }
    </style>
@section('content')
    <div class="container-fluid pl-5 pr-5 pt-3" style="height: 100vh; overflow-y: auto; overflow-x: hidden">
        <div class="gallery-wrapper pt-5">
            <form action="{{ route('update-galeri') }}" method="post" enctype='multipart/form-data'>
                @csrf
                <div class="row">
                    <div class="col-12 text-right">
                        <button type="button" onclick="cancel()" class="h5 poppins-normal border-0 btn-cancel mr-3" style="background: none; padding: 12px 20px; border-radius: 5px; color: #9932CC">Cancel</button>
                        <input type="submit" name="submit_edit_galeri" value="Update" class="h5 poppins-normal border-0 text-white btn-submit" style="background: #9932CC; border-radius: 5px; padding: 12px 20px">
                    </div>
                </div>

                <input type="hidden" name="id_acara" value="{{ $acara->id }}">
                <div class="h1 poppins-normal text-center custom-text-color font-weight-bold mt-3 mb-5">{{ $acara->nama }}</div>

                <div class="row">
                    <div class="col-12">
                        @if (session('status'))
                            <div class="alert alert-success" style="width: fit-content">
                                <span class="h6">{{ session('status') }}</span>
                            </div>
                        @endif
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-12 h4 poppins-normal custom-text-color mb-4">Deskripsi Galeri</div>
                    <div class="col-12 mb-5">
                        <textarea name="deskripsi_galeri" rows="10" style="width: 100%; resize: none;" class="p-3 poppins-normal h6">{{ $acara->deskripsi_galeri }}</textarea>
                    </div>

                    <div class="col-6 h4 poppins-normal custom-text-color mb-4">Daftar Gambar</div>
                    
                    <div class="col-6 h4 poppins-normal custom-text-color mb-3 text-right">
                        <label for="upload-image" class="poppins-normal border-0 text-white" style="background: #D02BBC; border-radius: 5px; padding: 12px 20px; cursor: pointer"><span class="h6">+ Tambah Gambar</span></label>
                        <input type="file" name="image[]" id="upload-image" accept="image/*" onchange="addImage()" multiple/>
                    </div>

                    <div class="col-12 mb-4" id="add-image-parent" style="display: none">
                        <div class="h5">Gambar yang akan ditambahkan:</div>

                        <div class="text-white poppins-normal p-2 bg-white" id="add-image-section" style="display: none; flex-direction: row; min-height: 300px; max-height: 300px; border-radius: 10px; overflow-y: hidden; overflow-x: auto;">
                            <div id="add-image-list" style="display: flex; width: 100%;"> 

                            </div>
                        </div>
                    </div>

                    <div class="col-12">
                        <!-- Gambar -->
                        <div class="row" id="daftar-galeri">
                            @if ($detil_galeri != null && count($detil_galeri) > 0) 
                                @foreach($detil_galeri as $g)
                                    <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-4 p-3 img-gallery">
                                        <img class="rounded-0 img-image w-100" src="{{ asset('assets/img/galeri/'.str_replace(' ', '_', strtolower($g->nama_galeri)).'_'.$g->tahun.'/'.$g->link.'') }}" alt="event-ksm">
                                        <div style="position: absolute; top: 0px; right: 0px">
                                            <button type="button" href="#" class="btn btn-danger btn-delete-image" value="{{ $g->id_galeri }}"><span class="h6 font-weight-bold">Delete</span></button>
                                            <input type="hidden" name="deleteImage[]" value="">
                                        </div>
                                    </div>
                                @endforeach
                            @endif
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
        const addImage = (() => {
            let inputFile = document.getElementById('upload-image')

            if (inputFile.files && inputFile.files[0]) {
                $('#add-image-parent').css('display', 'block')
                $('#add-image-section').css('display', 'flex')
                $('#add-image-list').html('');

                for (let i = 0; i < inputFile.files.length; i++) {
                    let reader = new FileReader();
                    reader.onload = ((e) => $('#add-image-list').append(`<img src='${e.target.result}' alt='image' style='margin: 1% 1% 1% 1%;'>`))
                    reader.readAsDataURL(inputFile.files[i]);
                }
            } else {
                $('#add-image-parent').css('display', 'none')
                $('#add-image-section').css('display', 'none')
                $('#add-image-list').html('');
            }
        })

        $(document).on('click', '.btn-delete-image', function() {
            if ($(this).text() == "Delete") {
                $(this).html("<span class='h6 font-weight-bold'>Cancel</span>")
                $(this).removeClass('btn-danger')
                $(this).addClass('btn-secondary')
                $(this).parent().parent().children('img').css('opacity', '0.3')
                $(this).parent().children("input[type='hidden']").val($(this).val())
            } else {
                $(this).html("<span class='h6 font-weight-bold'>Delete</span>")
                $(this).removeClass('btn-secondary')
                $(this).addClass('btn-danger')
                $(this).parent().parent().children('img').css('opacity', '1')
                $(this).parent().children("input[type='hidden']").val('')
            }
        })
    </script>
@endsection