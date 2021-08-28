@extends('layout.admin')
    
@section('content')
    <div class="container-fluid">
        <div class="info-wrapper p-2 pt-5 p-lg-5 h6 poppins-normal" style="font-size: 1.1rem">
            <form action="{{ route('update-info-ksm') }}" method="post">
            @csrf
                <div class="info-header h3 mb-4 mb-lg-5">Info KSM Informatika</div>

                <div class="info-header text-small mb-5 font-italic text-danger font-weight-bold" style="font-size: 0.8rem">Gunakan url yang lengkap (contoh : https://www.google.com)</div>

                <div class="row ml-1 mb-3">
                    @if (session('status'))
                        <div class="alert alert-success" style="width: fit-content">
                            <span class="h6">{{ session('status') }}</span>
                        </div>
                    @endif
                </div>

                <div class="row mb-4 form-group">
                    <div class="info-header col-12 col-lg-2 d-flex align-items-center"><label for="email">Email</label></div>
                    <div class="info-header col-12 col-lg-10 mt-2 mb-2 mt-lg-0 mb-lg-0"><input type="email" class="form-control" id="email" name="email" value="{{ $info[0]->email }}"></div>
                </div>
                
                <div class="row mb-4 form-group">
                    <div class="info-header col-12 col-lg-2 d-flex align-items-center"><label for="line">Line</label></div>
                    <div class="info-header col-12 col-lg-10 mt-2 mb-2 mt-lg-0 mb-lg-0"><input type="text" class="form-control" id="line" name="line" value="{{ $info[0]->line }}"></div>
                </div>

                <div class="row mb-4 form-group">
                    <div class="info-header col-12 col-lg-2 d-flex align-items-center"><label for="whatsapp">Whatsapp</label></div>
                    <div class="info-header col-12 col-lg-10 mt-2 mb-2 mt-lg-0 mb-lg-0"><input type="text" class="form-control" id="whatsapp" name="whatsapp" value="{{ $info[0]->whatsapp }}"></div>
                </div>

                <div class="row mb-4 form-group">
                    <div class="info-header col-12 col-lg-2 d-flex align-items-center"><label for="instagram">Instagram</label></div>
                    <div class="info-header col-12 col-lg-10 mt-2 mb-2 mt-lg-0 mb-lg-0"><input type="text" class="form-control" id="instagram" name="instagram" value="{{ $info[0]->instagram }}"></div>
                </div>

                <div class="row mb-4 mb-lg-5 form-group">
                    <div class="info-header col-12 col-lg-2 d-flex align-items-center"><label for="youtube">Youtube</label></div>
                    <div class="info-header col-12 col-lg-10 mt-2 mb-2 mt-lg-0 mb-lg-0"><input type="text" class="form-control" id="youtube" name="youtube" value="{{ $info[0]->youtube }}"></div>
                </div>

                <div class="text-right">
                    <input type="submit" name="simpan" value="Simpan" class="btn text-white font-weight-bold" style="background: #9932CC; border-radius: 5px; padding: 12px 24px; font-size: 1rem">
                </div>
            </form>
        </div>
    </div>
@endsection

@section('javascript')
    <script>
        $('#nav-info').addClass('active');
    </script>
@endsection