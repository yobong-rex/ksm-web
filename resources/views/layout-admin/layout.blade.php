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

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    @yield('Javascript')

    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">

    <!-- Material Kit CSS -->
    <link href="{{url('/assets_template/css/material-dashboard.css?v=2.1.2')}}" rel="stylesheet" />

    <link href="{{asset( '/assets/css/bootstrap-4.0.0/dist/css/bootstrap.css' ) }}" rel="stylesheet" type="text/css">
	<link href="{{asset( '/assets/css/style.css' ) }}" rel="stylesheet" type="text/css">
	<link href="{{asset( '/assets/css/responsive.css' ) }}" rel="stylesheet" type="text/css">
	<link href="{{asset( '/assets/css/animate.css' ) }}" rel="stylesheet" type="text/css">
	<link href="{{asset( '/assets/css/fontawesome-5.3.1/css/all.css' ) }}" rel="stylesheet" type="text/css">

    <style>
    .card-dash {
        transition: 0.4s;
    }

    .card-dash:hover {
        transform: scale(1.1);
        cursor: pointer; 
    }
    </style>
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