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
        <div class="row container-fluid p-0 m-0">
            <div class="col-12 p-3 mobile-header bg-light">
                <div class="row m-0 p-0">
                    <div class="col-2 p-0 pl-2">
                        <button type="button" id="btn-menu-mobile" class="btn btn-light p-1 pl-2 pr-2 text-center" style="border: 2px solid #777777"><i class="large material-icons" style="color: #333333">menu</i></button>
                    </div>

                    <div class="col-8 p-0 d-flex align-items-center justify-content-center">
                        <div class="h5 poppins-normal">KSM Informatika</div>
                    </div>

                    <div class="col-2 text-right p-0 pr-2">
                        <button type="button" class="btn btn-light p-1 pl-2 pr-2 text-center" data-toggle="modal" data-target="#konfirmasi-logout"><i class="large material-icons" style="color: red">power_settings_new</i></button>
                    </div>
                </div>
            </div>

            <!-- sidebar menu area start -->
            <div class="side-navigation bg-dark col-0 col-lg-3 col-xl-2 p-0">
                <div class="side-nav-header" style="position: relative">
                    <div class="logo text-center p-4">
                        <img src="{{ asset('/assets/img/ksm-putih-min.png') }}" alt="logo-ksm" class="w-75" id="logo-menu">
                    </div>

                    <div class="close-icon pt-4 pr-4 text-right" style="top: 0; right: 0; cursor: pointer">
                        <i class="material-icons" style="color: white">close</i>
                    </div>
                </div>

                <div class="side-nav-body pl-2 pt-4 pb-4 pr-2">
                    <ul>
                        <a href="{{ route('admin-dashboard') }}"><li class="nav-item mb-2 p-3 pl-3" id="nav-dashboard"><span class="text-white h6 pl-2">Dashboard</span></li></a>
                        <a href="{{ route('admin-acara') }}"><li class="nav-item mb-2 p-3 pl-3" id="nav-acara"><span class="text-white h6 pl-2">Kelola Acara</span></li></a>
                        <a href="{{ route('admin-struktur') }}"><li class="nav-item mb-2 p-3 pl-3" id="nav-struktur"><span class="text-white h6 pl-2">Kelola Struktur</span></li></a>
                        <a href="{{ route('admin-peserta') }}"><li class="nav-item mb-2 p-3 pl-3" id="nav-peserta"><span class="text-white h6 pl-2">Daftar Peserta</span></li></a>
                        <a href="{{ route('admin-galeri') }}"><li class="nav-item mb-2 p-3 pl-3" id="nav-galeri"><span class="text-white h6 pl-2">Galeri Acara</span></li></a>
                        <a href="{{ route('admin-info-ksm') }}"><li class="nav-item mb-2 p-3 pl-3" id="nav-info"><span class="text-white h6 pl-2">Info KSM</span></li></a>
                        <a href="{{ route('admin-bursa-soal') }}"><li class="nav-item mb-2 p-3 pl-3" id="nav-bursa"><span class="text-white h6 pl-2">Bursa Soal</span></li></a>
                    </ul>
                </div>
            </div>
            <!-- sidebar menu area end -->

            <!-- main content area start -->
            <div class="col-12 col-lg-9 col-xl-10 bg-light">
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

            <!-- Modal -->
            <div class="modal fade" id="konfirmasi-logout" tabindex="-1" role="dialog" aria-labelledby="konfirmasiLogout" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content poppins-normal">
                        <div class="modal-header">
                            <div class="modal-title h4" id="konfirmasiLogout" style="margin: auto">Logout</div>
                        </div>
                        <div class="modal-body">
                            Apakah kamu yakin untuk keluar dari halaman admin?
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn" style="background: none" data-dismiss="modal"><span class="h6">Tidak</span></button>
                            <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><button type="button" class="btn btn-danger"><span class="h6">Ya</span></button></a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">@csrf</form>
                        </div>
                    </div>
                </div>
            </div>
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
                $('.side-navigation').css('width', '80%');
            });

            $(document).on('click', '.close-icon', function() {
                $('.side-navigation').css('width', '0');
            });
        </script>

        @yield('javascript')
    </body>
</html>
