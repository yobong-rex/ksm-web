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
    </head>

    <body>
        <!-- Container Website -->
        <div class="container-fluid wrapper">
            <!-- Header Website -->
            <header>
                <div class="header-wrapper text-center">
                    <div class="header-logo">
                        <img src="{{ asset('assets/img/ksm-putih.png') }}" alt="logo-ksm">
                    </div>

                    <div class="header-text font-weight-bold text-white">KSM INFORMATIKA</div>

                    <div class="header-motto font-weight-bold font-italic text-white">WE NOT ME</div>

                    <div><button type="button" class="btn btn-primary font-weight-bold btn-get-started">GET STARTED</button></div>
                </div>
            </header>

            <!-- Navigation Website -->
            <nav class="navbar navbar-expand-lg bg-primary" id="navigation-bar">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#">KSM Informatika</a>

                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-bar navbar-kebab"></span>
                        <span class="navbar-toggler-bar navbar-kebab"></span>
                        <span class="navbar-toggler-bar navbar-kebab"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                        <ul class="navbar-nav mr-auto mt-2 mt-lg-0 navigation-list">
                            <li class="nav-item">
                                <a class="nav-link" href="#">Beranda</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Struktur Organisasi</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Acara</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Galeri</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">LSTA & BURSA</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>

            <!-- Content Website -->
            <main>
                <div class="container" style="background: red;height: 1000px">
                    @yield("content")
                    asd<br><br><br><br><br><br>
                    hrtf<br><br><br><br><br><br>
                    qwe<br><br><br><br><br><br>
                    mgh<br><br><br><br><br><br>
                    sad<br><br><br><br><br><br>
                    vcx<br><br><br><br><br><br>
                    ytu<br><br><br><br><br><br>
                    gsfd<br><br><br><br><br><br>
                    jasd<br><br><br><br><br><br>
                </div>
            </main>

            <!-- Footer Website -->
            <footer></footer>
        </div>
    </body>
</html>