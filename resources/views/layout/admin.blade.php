<!doctype html>
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Template Admin</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="{{ asset('assets/asset_admin/css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/asset_admin/css/font-awesome.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/asset_admin/css/metisMenu.css') }}">
        
        <!-- Start datatable css -->
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.18/css/dataTables.bootstrap4.min.css">
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.jqueryui.min.css">
        
        <!-- style css -->
        <link rel="stylesheet" href="{{ asset('assets/asset_admin/css/typography.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/asset_admin/css/default-css.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/asset_admin/css/styles.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/asset_admin/css/responsive.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/admin-template.css') }}">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

        <!-- modernizr css -->
        <script src="asset('assets/asset_admin/js/vendor/modernizr-2.8.3.min.js') }}"></script>
    </head>

    <body>
        <!-- page container area start -->
        <div class="row container-fluid">
            <div class="col-12 bg-success">
                <button type="button" id="btn-menu-mobile">
                    <span class="navbar-toggler-icon text-dark"></span>
                </button>
            </div>

            <!-- sidebar menu area start -->
            <div class="side-navigation bg-dark col-0 col-md-3 col-lg-3 col-xl-2 p-0">
                <div class="side-nav-header">
                    <div class="logo text-center p-4">
                        <img src="{{ asset('/assets/img/ksm-putih-min.png') }}" alt="logo-ksm" class="w-75" id="logo-menu">
                    </div>

                    <div class="close-icon"><i class="material-icons">close</i></div>
                </div>

                <div class="side-nav-body pl-2 pt-4 pb-4 pr-2">
                    <ul>
                        <a href="{{ route('admin-dashboard') }}"><li class="nav-item mb-2 p-3 pl-3"><span class="text-white h6 pl-2">Dashboard</span></li></a>
                        <a href="{{ route('admin-acara') }}"><li class="nav-item mb-2 p-3 pl-3"><span class="text-white h6 pl-2">Kelola Acara</span></li></a>
                        <a href="{{ route('admin-struktur') }}"><li class="nav-item mb-2 p-3 pl-3"><span class="text-white h6 pl-2">Kelola Struktur</span></li></a>
                        <a href="{{ route('admin-peserta') }}"><li class="nav-item mb-2 p-3 pl-3"><span class="text-white h6 pl-2">Daftar Peserta</span></li></a>
                        <a href="{{ route('admin-galeri') }}"><li class="nav-item mb-2 p-3 pl-3"><span class="text-white h6 pl-2">Galeri Acara</span></li></a>
                        <a href="{{ route('admin-info-ksm') }}"><li class="nav-item mb-2 p-3 pl-3"><span class="text-white h6 pl-2">Info KSM</span></li></a>
                        <a href="{{ route('admin-bursa-soal') }}"><li class="nav-item mb-2 p-3 pl-3"><span class="text-white h6 pl-2">Bursa Soal</span></li></a>
                    </ul>
                </div>
            </div>

            <!-- sidebar menu area end -->

            <!-- main content area start -->
            <div class="col-12 col-md-9 col-lg-9 col-xl-10">
                <div class="main-wrapper">
                    @yield('content')
                </div>
            </div>
            <!-- main content area end -->

            <!-- footer area start-->
            <!-- <footer>
                <div class="footer-area">
                    <p>Copyright ©<span class="copyright-year"></span> | KSM Informatika Universitas Surabaya</p>
                </div>
            </footer> -->
            <!-- footer area end-->
        </div>
        <!-- page container area end -->

        <!-- jquery latest version -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

        <!-- bootstrap 4 js -->
        <script src="{{ asset('assets/asset_admin/js/popper.min.js') }}"></script>
        <script src="{{ asset('assets/asset_admin/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('assets/asset_admin/js/metisMenu.min.js') }}"></script>
        <script src="{{ asset('assets/asset_admin/js/jquery.slimscroll.min.js') }}"></script>

        <!-- Start datatable js -->
        <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>
        <script src="https://cdn.datatables.net/1.10.18/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/1.10.18/js/dataTables.bootstrap4.min.js"></script>
        <script src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>
        <script src="https://cdn.datatables.net/responsive/2.2.3/js/responsive.bootstrap.min.js"></script>

        <!-- others plugins -->
        <script src="{{ asset('assets/asset_admin/js/plugins.js') }}"></script>
        <script src="{{ asset('assets/asset_admin/js/scripts.js') }}"></script>

        <script>
            $(document).ready(function() {
                $('.copyright-year').text(new Date().getFullYear());
            });

            $(document).on('click', '#btn-menu-mobile', function() {
                $('.sidebar-menu').css('width', '100vw !important');
            });
        </script>
    </body>
</html>
