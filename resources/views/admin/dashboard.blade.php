@extends('layout.admin')

@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-4">
                <div class="card w-100 h-100 m-0">
                    <img src="{{ asset('assets/img/dashboard/manage_acara.svg') }}" alt="punten-gopud">
                </div>
            </div>

            <div class="col-4">
                <div class="card w-100 h-100 m-0">
                    <img src="{{ asset('assets/img/dashboard/manage_struktur.svg') }}" alt="punten-gopud">
                </div>
            </div>

            <div class="col-4">
                <div class="card w-100 h-100 m-0">
                    <img src="{{ asset('assets/img/dashboard/manage_acara.svg') }}" alt="punten-gopud">
                </div>
            </div>
        </div>
    </div>
@endsection

@section('javascript')
    <script>
        $('#nav-dashboard').addClass('active');
        $('#nav-dashboard span').addClass('active-font');
    </script>
@endsection