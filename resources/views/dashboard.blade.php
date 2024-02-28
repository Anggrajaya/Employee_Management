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

<style>
    .no-text-decoration {
        text-decoration: none;
    }

    .square {
        position: relative;
        width: 100%;
    }

    .square img {
        display: block;
        width: 100%;
        height: auto;
    }

    .square::before {
        content: "";
        display: block;
        padding-top: 100%;
        /* Ini adalah rasio aspek persegi (1:1) */
    }
</style>

<body id="page-top">

    <div class="bg-gradient-primary">
        <x-app-layout>
            <div id="wrapper">
                @include('layouts.SideBar')

                <!-- Content Wrapper -->
                <div id="content-wrapper" class="d-flex flex-column">

                    <!-- Main Content -->
                    <div id="content">

                        <!-- Topbar -->
                        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                            <!-- Sidebar Toggle (Topbar) -->
                            <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                                <i class="fa fa-bars"></i>
                            </button>

                            <!-- Topbar Search -->
                            <form
                                class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                                <div class="input-group">
                                    <input type="text" class="form-control bg-light border-0 small"
                                        placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                                    <div class="input-group-append">
                                        <button class="btn btn-primary" type="button">
                                            <i class="fas fa-search fa-sm"></i>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </nav>
                        <!-- End of Topbar -->

                        <!-- Begin Page Content -->
                        <div class="container-fluid">

                            <!-- Page Heading -->
                            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                                <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
                                <a href="" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                        class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
                            </div>

                            <!-- Content Row -->
                            <div class="row">

                                <!-- Earnings (Monthly) Card Example -->
                                <div class="col-xl-3 col-md-6 mb-4">
                                    <div class="card border-left-primary shadow h-100 py-2">
                                        <div class="card-body">
                                            <div class="row no-gutters align-items-center">
                                                <div class="col mr-2">
                                                    <div
                                                        class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                        Jumlah (Karyawan)</div>
                                                    <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                        {{$jumlah_pegawai}}</div>
                                                    <a href="{{url('/detail_pegawai')}}"
                                                        class="nav-link text-sm text-primary m-0 p-0 pt-1">
                                                        <span>Lihat Karyawan</span>
                                                    </a>
                                                </div>
                                                <div class="col-auto">
                                                    <i class="fas fa-solid fa-user fa-2x text-gray-300"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Earnings (Monthly) Card Example -->
                                <div class="col-xl-3 col-md-6 mb-4">
                                    <div class="card border-left-success shadow h-100 py-2">
                                        <div class="card-body">
                                            <div class="row no-gutters align-items-center">
                                                <div class="col mr-2">
                                                    <div
                                                        class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                                        Jumlah (Ijin)</div>
                                                    <div class="h5 mb-0 font-weight-bold text-gray-800">{{$jumlah_cuti}}
                                                    </div>
                                                    <a href="{{url('/detail_cuti')}}"
                                                        class="nav-link text-sm text-success m-0 p-0 pt-1">
                                                        <span>Lihat Cuti</span>
                                                    </a>
                                                </div>
                                                <div class="col-auto">
                                                    <i class="fas fas fa-fw fa-clock fa-2x text-gray-300"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Pending Requests Card Example -->
                                <div class="col-xl-3 col-md-6 mb-4">
                                    <div class="card border-left-warning shadow h-100 py-2">
                                        <div class="card-body">
                                            <div class="row no-gutters align-items-center">
                                                <div class="col mr-2">
                                                    <div
                                                        class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                                        Jumlah Departemen</div>
                                                    <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                        {{$jumlah_department}}</div>
                                                    <a href="{{url('/detail_department')}}"
                                                        class="nav-link text-sm text-warning m-0 p-0 pt-1">
                                                        <span>Lihat Departement</span>
                                                    </a>
                                                </div>
                                                <div class="col-auto">
                                                    <i class="fas fa-building fa-2x text-gray-300"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Content Row -->
                            <div class="row">

                                <!-- Content Column -->
                                <div class="col-lg-6 mb-4">

                                    <!-- Tabel Employee -->
                                    <div class="card shadow mb-4">
                                        <div class="container p-2 mx-auto sm:p-4 dark:text-grey-700">
                                            <h2 class="mb-4 text-2xl font-semibold leadi">Data Pegawai</h2>
                                            <div class="overflow-x-auto">
                                                <table class="min-w-full text-base w-700">
                                                    <colgroup>
                                                        <col>
                                                        <col>
                                                        <col>
                                                        <col>
                                                        <col>
                                                        <col class="w-24">
                                                    </colgroup>
                                                    <thead class="dark:bg-gray-300">
                                                        <tr class="text-left">
                                                            <th class="p-3 text-center">NIP</th>
                                                            <th class="p-3 text-center">Gambar</th>
                                                            <th class="p-3 text-center">Nama</th>
                                                            <th class="p-3 text-center">Alamat</th>
                                                            <th class="p-3 text-center">No Telp</th>
                                                            <th class="p-3 text-center">Gaji</th>
                                                            <th class="p-3 text-center">NID</th>
                                                            <th class="p-3 text-center">Status</th>
                                                            <th class="p-3 text-center">Jabatan</th>
                                                            <th class="p-3 text-center">Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>

                                                        @foreach ($employee as $employees)
                                                        <tr
                                                            class="border-b border-opacity-20 dark:border-gray-700 dark:bg-gray-200">
                                                            <td class="p-3">
                                                                <p>{{$employees->NIP}}</p>
                                                            </td>
                                                            <td class="p-3">
                                                                <img class="w-20 rounded-md"
                                                                    src="{{Storage::url($employees->image_pegawai)}}"
                                                                    alt="">
                                                            </td>
                                                            <td class="p-3">
                                                                <p>{{$employees->nama_pegawai}}</p>
                                                            </td>
                                                            <td class="p-3">
                                                                <p>{{$employees->alamat_employee}}</p>
                                                            </td>
                                                            <td class="p-3">
                                                                <p>{{$employees->no_telp_employee}}</p>
                                                            </td>
                                                            <td class="p-3 text-right">
                                                                <p>{{$employees->gaji_employee}}</p>
                                                            </td>
                                                            <td class="p-3 text-right">
                                                                <p>{{$employees->NID}}</p>
                                                            </td>
                                                            <td class="p-3 text-right">
                                                                <p>{{$employees->status()}}</p>
                                                            </td>
                                                            <td class="p-3 text-right">
                                                                <p>{{$employees->jabatan_employee}}</p>
                                                            </td>
                                                            <td class="p-3 text-right">
                                                                <div class="flex flex-row gap-4 items-center">
                                                                    <form class="dark:text-gray-100"
                                                                        id="deleteForm{{$employees->id}}" method="post"
                                                                        action="{{route('pegawai.destroy',['employee' => $employees->id])}}">
                                                                        @csrf
                                                                        @method('delete')
                                                                        <button type="submit"
                                                                            class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded"
                                                                            onclick="onclick="
                                                                            confirmDelete({{$employees->id}})">Delete</button>
                                                                    </form>
                                                                    <a
                                                                        href="{{ route('pegawai.edit', ['employee' => $employees]) }}">
                                                                        <button
                                                                            class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded"
                                                                            value="{{$employees->id}}">Edit</button>
                                                                    </a>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        @endforeach
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-6 mb-4">

                                    <!-- Card Direktur -->
                                    <div class="card shadow mb-4">
                                        <div class="card-header py-3">
                                            <h6 class="m-0 font-weight-bold text-primary">Direktur</h6>
                                        </div>
                                        <div class="card-body">
                                            <div class="text-center">
                                                @foreach ($employee as $employees)
                                                @if($employees->jabatan_employee=='Direktur Utama')
                                                <img class="aspect-w-1 aspect-h-1 px-3 px-sm-4 mt-3 mb-4 aspect-w-1 square"
                                                    style="width: 10rem;  border-radius: 10px;"
                                                    src="{{Storage::url($employees->image_pegawai)}}" alt="...">
                                                @endif
                                                @endforeach

                                            </div>
                                            <p>Add some quality, svg illustrations to your project courtesy of <a
                                                    target="_blank" rel="nofollow" href="https://undraw.co/">unDraw</a>,
                                                a
                                                constantly updated collection of beautiful svg images that you can use
                                                completely free and without attribution!</p>
                                            <a target="_blank" rel="nofollow" href="https://undraw.co/">Browse
                                                Illustrations on
                                                unDraw &rarr;</a>
                                        </div>
                                    </div>

                                    <!-- Approach -->
                                    <div class="card shadow mb-4">
                                        <div class="card-header py-3">
                                            <h6 class="m-0 font-weight-bold text-primary">Profil Singkat</h6>
                                        </div>
                                        <div class="card-body">
                                            <p>Empoyee Menegement System adalah sistem dimana dapat mempermudah
                                                pendataan pegawai. Website ini berguna untuk mempermudah dan mempercepat
                                                pendataan pada sebuah kantor atau institusi.</p>
                                            <p class="mb-0">Website ini dibangun dengan freamwork laravel untuk backend
                                                nya</p>
                                        </div>
                                    </div>

                                </div>
                            </div>

                        </div>
                        <!-- /.container-fluid -->

                    </div>
                    <!-- End of Main Content -->

                    <!-- Footer -->
                    <footer class="sticky-footer bg-white">
                        <div class="container my-auto">
                            <div class="copyright text-center my-auto">
                                <span>Copyright &copy; Your Website 2021</span>
                            </div>
                        </div>
                    </footer>
                    <!-- End of Footer -->

                </div>
                <!-- End of Content Wrapper -->

            </div>
        </x-app-layout>
        <!-- Page Wrapper -->

        <!-- End of Page Wrapper -->

        <!-- Scroll to Top Button-->
        <a class="scroll-to-top rounded" href="#page-top">
            <i class="fas fa-angle-up"></i>
        </a>

        <!-- Logout Modal-->
        <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                    <div class="modal-footer">
                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                        <a class="btn btn-primary" href="login.html">Logout</a>
                    </div>
                </div>
            </div>
        </div>


    </div>

    <!-- Sidebar -->


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

</body>

</html>

<!------->