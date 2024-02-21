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
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"rel="stylesheet">
    <!-- Custom styles for this template-->
    <link href="{{ asset ('template/css/sb-admin-2.min.css') }}" rel="stylesheet">

</head>

<body id="page-top">
    <style>
        label, input {
          /* Membuat label dan input menjadi block element */
          display: block;
          /* Menambahkan margin bawah 10px untuk setiap label dan input */
          margin-bottom: 10px;
        }
      </style>
      <?php $no=0;?>
<div class="bg-primary">
    <x-app-layout>
       <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        @include('layouts.SideBar')
        <!-- End of Sidebar -->

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
                            <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..."
                                aria-label="Search" aria-describedby="basic-addon2">
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
                        <h1 class="h3 mb-0 text-gray-800">Departement</h1>
                        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
                    </div>

                    <!-- Content Row -->
                    <div class="row">
                        <!-- Input Table -->
                        <div class=" mb-4 mx-auto">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body w-900">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                <form  method="post" action="{{ route('department.store') }}" enctype="multipart/form-data">
                                                    @csrf
                                                    @method('post')
                                                    <div class="grid grid-cols-1 gap-4 md:grid-cols-3">
                                                        <div>
                                                            <label for="NIP" class="col-span-3">NID:</label>
                                                            <input type="text" name="NID" id="NID" placeholder="NID" class="col-span-3">
                                                        </div>
                                                        <div>
                                                          <label for="nama" class="col-span-3">Nama Departement:</label>
                                                          <input type="text" name="nama_departement" id="nama_department" placeholder="Nama" class="col-span-3">
                                                        </div>
                                                        <div>
                                                            <label for="lokasi" class="col-span-3">Lokasi Departement:</label>
                                                            <input type="text" name="lokasi_departement" id="lokasi_departement" placeholder="Lokasi Department" class="col-span-3">
                                                          </div>
                                                        <div>
                                                          <label for="Manager" class="col-span-3">Manager Departement:</label>
                                                          <input type="text" name="manager_departement" id="manager_departement" placeholder="Manager" class="col-span-3">
                                                        </div>
                                                    </div>
                                                    </div>       
                                                        <div class="pt-4 mt-2 text-primary">
                                                            <input type="submit" value="Simpan">
                                                        </div>   
                                                    </div> 
                                                </form>
                                                <!-- Tambahkan textbox lain sesuai kebutuhan -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Content Row -->
                    <div class="row">

                        <!-- Content Column -->
                        <div class="mb-4 mx-auto">

                            <!-- Project Card Example -->
                            <div class="card shadow mb-4">
                                <div class="container p-2 mx-auto sm:p-4 dark:text-grey-700">
                                    <h2 class="mb-4 text-2xl font-semibold leadi">Data Department</h2>
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
                                                    <th class="p-3 text-center">No</th>
                                                    <th class="p-3 text-center">NID</th>
                                                    <th class="p-3 text-center">Nama</th>
                                                    <th class="p-3 text-center">Lokasi</th>
                                                    <th class="p-3 text-center">Manager</th>
                                                    <th class="p-3 text-center">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                
                                                    @foreach ($department as $departments)
                                                      <tr class="border-b border-opacity-20 dark:border-gray-700 dark:bg-gray-200">
                                                        <td class="p-3">
                                                            <p>{{++$no}}</p>
                                                        </td>
                                                        <td class="p-3">
                                                            <p>{{$departments->NID}}</p>
                                                        </td>
                                                        <td class="p-3">
                                                            <p>{{$departments->nama_departement}}</p>
                                                        </td>
                                                        <td class="p-3">
                                                            <p>{{$departments->lokasi_departement}}</p>
                                                        </td>
                                                        <td class="p-3">
                                                            <p>{{$departments->manager_departement}}</p>
                                                        </td>
                                                        <td class="p-3 text-right">
                                                            <div class="flex flex-row gap-4 items-center">
                                                                <form class="dark:text-gray-100" id="deleteForm{{$departments->id}}" method="post" action="{{route('department.destroy',['department' => $departments->id])}}">
                                                                    @csrf
                                                                    @method('delete')
                                                                    <button type="submit" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded" onclick="onclick="confirmDelete({{$departments->id}})">Delete</button>
                                                                </form>
                                                                <a href="{{ route('department.edit', ['department' => $departments]) }}">
                                                                    <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded" value="{{$departments->id}}">Edit</button>
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
    </x-app-layout>
    
</div>
 <!-- Sidebar -->
 <script>
       function confirmDelete(id) {
        if (confirm("Apakah Anda yakin ingin menghapus data ini?")) {
            document.getElementById('deleteForm'+id).submit();
        } else {
            return false;
        }
    }
 </script>
 

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
