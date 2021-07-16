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
        
        <!-- modernizr css -->
        <script src="asset('assets/asset_admin/js/vendor/modernizr-2.8.3.min.js') }}"></script>

        <style>
            ul#menu > li:hover a {
                background: rgba(150, 150, 150, 0.3);
                transition: 0.8s;
            }
        </style>
    </head>

    <body>
        <!-- page container area start -->
        <div class="page-container">
            <!-- sidebar menu area start -->
            <div class="sidebar-menu">
                <div class="sidebar-header">
                    <div class="logo">
                        <img src="{{ asset('/assets/img/ksm-putih.png') }}" alt="logo-ksm" class="w-75">
                    </div>
                </div>
                <div class="main-menu">
                    <div class="menu-inner">
                        <nav>
                            <ul class="metismenu" id="menu">
                                <li class="mb-2"><a href="{{ route('admin-dashboard') }}"><span class="text-white h6">Dashboard</span></a></li>
                                <li class="mb-2"><a href="{{ route('admin-acara') }}"><span class="text-white h6">Manage Acara</span></a></li>
                                <li class="mb-2"><a href="{{ route('admin-struktur') }}"><span class="text-white h6">Manage Struktur</span></a></li>
                                <li class="mb-2"><a href="{{ route('admin-peserta') }}"><span class="text-white h6">List Peserta</span></a></li>
                                <li class="mb-2"><a href="{{ route('admin-galeri') }}"><span class="text-white h6">Gallery Acara</span></a></li>
                                <li class="mb-2"><a href="{{ route('admin-info-ksm') }}"><span class="text-white h6">Info KSM</span></a></li>
                                <li class="mb-2"><a href="{{ route('admin-bursa-soal') }}"><span class="text-white h6">Bursa Soal</span></a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
            <!-- sidebar menu area end -->

            <!-- main content area start -->
            <div class="main-content">
                <div class="main-content-inner">
                    @yield('content')
                </div>
            </div>
            <!-- main content area end -->

            <!-- footer area start-->
            <footer>
                <div class="footer-area">
                    <p>Copyright ©<span class="copyright-year"></span> | KSM Informatika Universitas Surabaya</p>
                </div>
            </footer>
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
        </script>
    </body>
</html>
