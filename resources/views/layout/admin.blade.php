<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin KSM</title>
    <!-- <link rel="icon" href="{{url('assets/icon.png')}}"> -->
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <!-- CSS -->
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,600,700,800" rel="stylesheet">

    <!-- Icons -->
    <link href="/assets/vendor/nucleo/css/nucleo-icons.css" rel="stylesheet">
    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
    
    <!-- untuk table -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.css">
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.js"></script>
  
  
  



    <!-- Theme CSS -->
    <link type="text/css" href="/assets/css/blk-design-system.min.css" rel="stylesheet">

    <!-- JS -->
    <!-- Core -->
    <script src="/assets/vendor/jquery/jquery.min.js"></script>
    <script src="/assets/vendor/popper/popper.min.js"></script>
    <script src="/assets/vendor/bootstrap/bootstrap.min.js"></script>

    <!-- Theme JS -->
    <script src="/assets/js/blk-design-system.min.js"></script>
    
    @yield('Javascript')

    
</head>
<body>
<div class="sidebar" data-color="orange" data-background-color="white">
    <!--
    Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

    Tip 2: you can also add an image using data-image tag -->
    <div class="logo">
        <img class="small-logo" src="{{asset( '/assets/img/logo-ksmif.png' ) }}" width=100%>
    </div>
    
    <div class="sidebar-wrapper">
    <ul class="nav">
        <li class="nav-item" id="cek-pendaftaran">
            <a class="nav-link" href="">
                <i class="material-icons">dvr</i>
                <p>Cek Pendaftaran</p>
            </a>
        </li>
        <!-- end of sidebar -->
    </ul>
    </div>
</div>
<div class="wrapper">
    <!-- Sidebar Navigation -->

    <div class="main-panel">
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
            <div class="container-fluid">
                <div class="navbar-wrapper ml-3">
                    Cek Pendaftaran
                </div>
                <div class="collapse navbar-collapse justify-content-end">
                   <span class="h4 text-capitalize fw-bold mr-3">{{Auth::user()->name}}</span>
                   <span class="h4 text-capitalize fw-bold mr-4 bg-primary p-2 pr-4 pl-4" style="border-radius: 20px"><a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="text-light"> {{ __('Logout') }}</a></span>
                   <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">@csrf</form>
                </div>
            </div>
        </nav>
        <!-- End Navbar -->
        <div class="content">
            <div class="container-fluid">

        @yield('content')
                </div>
            </div>
        </div>
    </div>
    <script src="../js/app.js"></script>
    <script>

    </script>
    
</body>
</html>