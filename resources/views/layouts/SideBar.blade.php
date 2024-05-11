<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Employee Menegement</title>

    <!-- Custom fonts for this template-->
    <link href="{{ asset ('template/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{ asset ('template/css/sb-admin-2.min.css') }}" rel="stylesheet">

</head>
<body>
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

        <!-- Sidebar - Brand -->
        <a class="sidebar-brand d-flex align-items-center justify-content-center">
            <div class="sidebar-brand-icon rotate-n-15">
                <i class="fas fa-address-book"></i>
            </div>
            <div class="sidebar-brand-text mx-3">StaffHub</div>
        </a>

        <!-- Divider -->
        <hr class="sidebar-divider my-0">

        <li class="nav-item active">
            <a class="nav-link" href="{{route('dashboard')}}">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Dashboard</span></a>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider">

        <!-- Heading -->
        <div class="sidebar-heading">
            Data Pegawai
        </div>

        <!-- Nav Item - Pages Collapse Menu -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="{{route('pegawai.index')}}">
                <i class="fas fa-solid fa-user"></i>
                <span>Pegawai</span>
            </a>
        </li>

        <!-- Nav Item - Utilities Collapse Menu -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="{{url('/cuti')}}">
                <i class="fas fa-fw fa-clock"></i>
                <span>Cuti</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link collapsed" href="{{url('/department')}}">
                <i class="fas fa-fw fa-building"></i>
                <span>Departement</span>
            </a>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider d-none d-md-block">

        <!-- Sidebar Toggler (Sidebar) -->
        <div class="text-center d-none d-md-inline">
            <button class="rounded-circle border-0" id="sidebarToggle"></button>
        </div>

    </ul>

    <!---colapse-sidebar--->
    
     <!-- Bootstrap core JavaScript-->
     <script src="{{ asset ('template/vendor/jquery/jquery.min.js') }}"></script>
     <script src="{{ asset ('template/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
     @include('includes.script')
 
     <!-- Core plugin JavaScript-->
     <script src="{{ asset ('template/vendor/jquery-easing/jquery.easing.min.js') }}"></script>
 
     <!-- Custom scripts for all pages-->
     <script src="{{ asset ('template/js/sb-admin-2.min.js') }}"></script>
 
     <!-- Page level plugins -->
     <script src="{{ asset ('template/vendor/chart.js/Chart.min.js') }}"></script>
 
     <!-- Page level custom scripts -->
     <script src="{{ asset ('template/js/demo/chart-pie-demo.js') }}"></script>
     <script src="{{ asset ('template/js/demo/chart-area-demo.js') }}"></script>


     <script>
        $(document).ready(function() {
            $("#sidebarToggle").click(function(e) {
                e.preventDefault();
                $("body").toggleClass("sidebar-toggled");
                $(".sidebar").toggleClass("toggled");
                if ($(".sidebar").hasClass("toggled")) {
                    $('.sidebar .collapse').collapse('hide');
                };
            });
        });
    </script>
</body>
</html>