<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <!-- Custom fonts for this template-->
    <link href="{{ asset ('template/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
    <!-- Custom styles for this template-->
    <link href="{{ asset ('template/css/sb-admin-2.min.css') }}" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
    <!-- Modal -->
    <div id="popup" class="fixed top-0 left-0 w-full h-full flex justify-center items-center bg-gray-800 bg-opacity-50  z-50">
        <div class="bg-white rounded-lg p-8 sm:w-full md:w-3/4 lg:w-1/2 xl:w-1/3">
            <div class="mb-4">
                <h2 class="text-xl font-semibold mb-2">Tambah Pegawai</h2>
                <hr>
            </div>
            <form method="post" action="{{route('cuti.update', ['cuti' => $cuti])}}">
                @csrf
                @method('put')
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                    <!-- Kolom pertama -->
                    <div>
                        <label for="NIP" class="block">NIP:</label>
                        <input type="text" name="NIP" id="NIP" placeholder="NIP" class="w-full border-gray-300 rounded-md shadow-sm p-1"
                            value="{{$cuti->NIP}}">
                        <label for="nama" class="block mt-4">Nama:</label>
                        <input type="text" name="nama_employee" id="nama" placeholder="Nama Pegawai"
                            class="w-full border-gray-300 rounded-md shadow-sm p-1" value="{{$cuti->nama_employee}}">
                        <label for="alamat" class="block mt-4">Alamat:</label>
                        <input type="date" name="tanggal_mulai" id="tanggal_mulai" placeholder="Alamat"
                            class="w-full border-gray-300 rounded-md shadow-sm p-1" value="{{$cuti->tanggal_mulai}}">
                    </div>
                    <!-- Kolom kedua -->
                    <div>
                        <label for="image_pegawai" class="block">Gambar:</label>
                        <input type="date" name="tanggal_selesai" id="tanggal_selesai" placeholder="Gambar"
                            class="w-full border-gray-300 rounded-md shadow-sm p-1" value="{{$cuti->tanggal_selesai}}">
                        <label for="no_telp" class="block mt-4">No Telp:</label>
                        <input type="text" name="no_telp" id="no_telp" placeholder="No Telp"
                            class="w-full border-gray-300 rounded-md shadow-sm p-1" value="{{$cuti->no_telp}}">
                        <label for="jenis_cuti" class="block mt-4">Jenis Cuti:</label>
                        <select name="jenis_cuti" id="jenis_cuti" class="w-full border-gray-300 rounded-md shadow-sm p-1">
                            <option value="{{$cuti->jenis_cuti}}">{{$cuti->jenis_cuti}}</option>
                            <option value="Hamil">Hamil</option>
                            <option value="Sakit">Sakit</option>
                            <option value="Keperluan">Keperluan</option>
                        </select>
                    </div>
                </div>
                <div class="mt-4">
                    <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Simpan</button>
                    <a href="{{url("/cuti")}}">
                        <button type="submit"
                        class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">Cancel</button>
                    </a>
                </div>
            </form>
        </div>
    </div>
    

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
