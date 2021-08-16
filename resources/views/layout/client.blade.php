<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>KSM Informatika</title>

        <!-- CSS Resources -->
        <link rel="stylesheet" href="{{ asset('assets/css/blk-design-system.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/client-template.css') }}">

        <!-- Javascript Resources -->
        <script src="{{ asset('assets/js/core/jquery.min.js') }}"></script>
        <script src="{{ asset('assets/js/core/popper.min.js') }}"></script>
        <script src="{{ asset('assets/js/core/bootstrap.min.js') }}"></script>
        <script src="{{ asset('assets/js/blk-design-system.min.js') }}"></script>

        <!-- Font Resources -->
        <link rel="stylesheet" href="{{ asset('assets/css/nucleo-icons.css') }}">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

        <!-- Icon Website -->
        <link rel="shortcut icon" href="{{ asset('assets/img/ksm-putih-min.png') }}" type="image/x-icon">
    </head>

    <body>
        <!-- Container Website -->
        <div class="container-fluid wrapper" id="#">
            <!-- Header Website -->
            <header>
                <div class="header-wrapper text-center">
                    <div class="header-logo">
                        <img src="{{ asset('assets/img/ksm-putih.png') }}" alt="logo-ksm">
                    </div>

                    <div class="header-text font-weight-bold text-white">KSM INFORMATIKA</div>

                    <div class="header-motto font-weight-bold font-italic text-white">WE NOT ME</div>

                    <div><a href="#navigation-bar"><button type="button" class="btn btn-primary font-weight-bold btn-get-started d-none" id="get-started">MULAI</button></a></div>
                </div>
            </header>

            <!-- Navigation Website -->
            <nav class="navbar navbar-expand-lg bg-primary sticky-top" id="navigation-bar" style="margin-bottom: 10px;">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#">KSM Informatika</a>

                    <!-- Collapse button for trigger mobile -->
                    <button onclick="openNav()" style="background: none; border: 0; outline: 0" class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-bar navbar-kebab"></span>
                        <span class="navbar-toggler-bar navbar-kebab"></span>
                        <span class="navbar-toggler-bar navbar-kebab"></span>
                    </button>

                    <!-- Navigation for desktop view -->
                    <div class="collapse navbar-collapse navigation-wrapper" id="navbarTogglerDemo02">
                        <ul class="navbar-nav mr-auto mt-2 mt-lg-0 navigation-list">
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('beranda') }}">Beranda</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('struktur-organisasi') }}">Struktur Organisasi</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('all-galeri') }}">Galeri</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('lsta-bursa') }}">LSTA & BURSA</a>
                            </li>
                        </ul>
                    </div>

                    <!-- Navigation for mobile view -->
                    <div class="side-navigation bg-dark">
                        <i class="large material-icons text-white btn-close" onclick="closeNav()" style="cursor: pointer">close</i>
                        
                        <ul class="mr-auto mt-2 mt-lg-0 side-nav-list">
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('beranda') }}">Beranda</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('struktur-organisasi') }}">Struktur Organisasi</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('all-galeri') }}">Galeri</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('lsta-bursa') }}">LSTA & BURSA</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>

            <!-- Content Website -->
            <main>
                <div class="container-fluid">
                    @yield("content")
                </div>
            </main>

            <!-- Footer Website -->
            <footer>
                <div class="container-fluid bg-dark">
                    <div class="container footer-wrapper p-3 pt-5 p-sm-1">
                        <div class="row footer-section text-white">
                            <div class="col-12 col-sm-12 col-md-6 order-2 order-sm-2 order-md-1 text-left p-3 p-sm-3 p-md-5">
                                <div class="h3 font-weight-bold text-white footer-content-header">Alamat</div>
                                <div class="footer-content-text">Gedung TC 2.3 Universitas Surabaya</div>
                                <div class="footer-content-text">Jl. Raya Kali Rungkut, Surabaya, Jawa Timur (60293)</div>
                            </div>

                            <div class="col-12 col-sm-12 col-md-6 order-4 order-sm-4 order-md-2 text-left text-sm-left text-md-right p-3 p-sm-3 p-md-5">
                                <div class="h3 font-weight-bold text-white footer-content-header">Sosial Media</div>
                                <div>
                                    <a href="{{ $info->youtube }}" target="_blank"><img src="{{ asset('assets/img/sosial_media/youtube.png') }}" alt="youtube" class="social-media-icon"></a>
                                    <a href="{{ $info->line }}" target="_blank"><img src="{{ asset('assets/img/sosial_media/line.png') }}" alt="line" class="social-media-icon"></a>
                                    <a href="{{ $info->instagram }}" target="_blank"><img src="{{ asset('assets/img/sosial_media/instagram.png') }}" alt="instagram" class="social-media-icon"></a>
                                </div>
                            </div>

                            <div class="col-12 col-sm-12 col-md-6 order-3 order-sm-3 order-md-3 text-left p-3 p-sm-3 p-md-5">
                                <div class="h3 font-weight-bold text-white footer-content-header">Email</div>
                                <div class="footer-content-text">{{ $info->email }}</div>
                            </div>

                            <div class="col-12 col-sm-12 col-md-6 order-1 order-sm-1 order-md-4 text-center text-sm-center text-md-right p-3 p-sm-3 p-md-5">
                                <img src="{{ asset('assets/img/ksm-putih.png') }}" alt="logo-footer" class="logo-footer w-50">
                                <div class="row">
                                    <div class="col-0 col-sm-0 col-md-6"></div>
                                    <div class="col-12 col-sm-12 col-md-6 text-center" id="easter-egg">:3</div>
                                </div>
                            </div>
                        </div>

                        <div class="row footer-section">
                            <div class="col-12 text-white h4 text-center p-4" id="copyright">
                                Copyright ©<span class="copyright-year"></span> | KSM Informatika Universitas Surabaya
                            </div>
                        </div>
                    </div>
                </div>
            </footer>

            <!-- Javascript & Jquery -->
            <script>
                $(document).ready(function() {
                    $('#easter-egg').css('visibility', 'hidden');
                    $('.copyright-year').text(new Date().getFullYear());
                });

                $(document).on('mouseover', '.logo-footer', function() {
                    $('#easter-egg').css('visibility', 'visible');
                });

                $(document).on('mouseleave', '.logo-footer', function() {
                    $('#easter-egg').css('visibility', 'hidden');
                });

                function openNav() {
                    $('.side-navigation').css('width', '50vw');
                }

                function closeNav() {
                    $('.side-navigation').css('width', '0');
                }
            </script>
        </div>
    </body>
</html>