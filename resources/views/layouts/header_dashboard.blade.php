<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>FlexStart Bootstrap Template - Index</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{ asset('public/storage/images/favicon.png') }}" rel="icon">
    <link href="{{ asset('public/storage/images/apple-touch-icon.png') }}" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->


    @include('libraries.script')
    @include('libraries.style')

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">

    <!-- =======================================================
  * Template Name: FlexStart
  * Template URL: https://bootstrapmade.com/flexstart-bootstrap-startup-template/
  * Updated: Mar 17 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
    <style>
        .navbar-scrolled {
            background: #fff;
        }
    </style>
</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="header fixed-top navbar-scrolled" id="header">
        <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

            <a href="index.html" class="logo d-flex align-items-center">
                <img src="{{ asset('storage/images/logo.png') }}" alt="">
                <span>StaffHub</span>
            </a>

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link scrollto active" href="{{url('dashboard')}}">Home</a></li>
                    <li><a class="nav-link scrollto" href="#detail_karyawan">Data Pegawai</a></li>
                    <li><a class="nav-link scrollto" href="#team">Team</a></li>
                    <li>
                        @if(auth()->check() && auth()->user()->hasRole('admin'))
                            <a class="nav-link scrollto" href="{{url('pegawai')}}">Edit Data</a>
                        @endif
                    </li>
                    <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->

        </div>
    </header>
    <script>
        window.addEventListener('scroll', function() {
        const header = document.getElementById('header');
        if (window.scrollY > 50) { // Mengubah warna navbar jika page di-scroll lebih dari 50px
          header.classList.add('navbar-scrolled');
        } else {
          header.classList.remove('navbar-scrolled');
        }
      });
      </script>
</body>
</html>