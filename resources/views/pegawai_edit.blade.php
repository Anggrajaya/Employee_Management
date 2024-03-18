<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <!-- Custom fonts for this template-->
    <link href="{{ asset ('template/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
    <!-- Custom styles for this template-->
    <link href="{{ asset ('template/css/sb-admin-2.min.css') }}" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
    <style>
        label,
        input {
            /* Membuat label dan input menjadi block element */
            display: block;
            /* Menambahkan margin bawah 10px untuk setiap label dan input */
            margin-bottom: 10px;
        }
    </style>
    <!-- Edit -->
    <div id="popup"
        class="fixed top-0 left-0 w-full h-full flex justify-center items-center bg-gray-800 bg-opacity-50  z-50">
        <div class="bg-white rounded-lg p-8 w-900 ">
            <div class="mb-4">
                <h2 class="text-xl font-semibold mb-2">Tambah Pegawai</h2>
                <hr>
            </div>
            <form method="post" action="{{route('pegawai.update', ['employee' => $employee])}}" enctype="multipart/form-data">
                @csrf
                @method('put')
                <div class="grid grid-cols-3 gap-4">
                    <!-- Kolom pertama -->
                    <div class="col-span-1">
                        <label for="NIP" class="block">NIP:</label>
                        <input type="text" name="NIP" id="NIP" placeholder="NIP"
                            class="w-full border-gray-300 rounded-md shadow-sm p-1"
                            value="{{$employee->NIP}}">
                        <label for="nama" class="block mt-4">Nama:</label>
                        <input type="text" name="nama_pegawai" id="nama" placeholder="Nama Pegawai"
                            class="w-full border-gray-300 rounded-md shadow-sm p-1"
                            value="{{$employee->nama_pegawai}}">
                        <label for="alamat" class="block mt-4">Alamat:</label>
                        <input type="text" name="alamat_employee" id="alamat" placeholder="Alamat"
                            class="w-full border-gray-300 rounded-md shadow-sm p-1"
                            value="{{$employee->alamat_employee}}">
                    </div>
                    <!-- Kolom kedua -->
                    <div class="col-span-1">
                        <label for="image_pegawai" class="block">Gambar:</label>
                        <input type="file" name="image_pegawai" id="image_pegawai" placeholder="Gambar"
                            class="w-full border-gray-300 rounded-md shadow-sm p-1"
                            value="{{$employee->image_pegawai}}">
                        <label for="no_telp" class="block mt-4">No Telp:</label>
                        <input type="text" name="no_telp_employee" id="no_telp" placeholder="No Telephone"
                            class="w-full border-gray-300 rounded-md shadow-sm p-1"
                            value="{{$employee->no_telp_employee}}">
                        <label for="gaji" class="block mt-4">Gaji:</label>
                        <input type="text" name="gaji_employee" id="gaji" placeholder="Gaji"
                            class="w-full border-gray-300 rounded-md shadow-sm p-1"
                            value="{{$employee->gaji_employee}}">
                    </div>
                    <!-- Kolom ketiga -->
                    <div class="col-span-1">
                        <label for="job" class="block">NID:</label>
                        <input type="text" name="NID" id="NID" placeholder="NID"
                            class="w-full border-gray-300 rounded-md shadow-sm p-1"
                            value="{{$employee->NID}}">
                        <label for="jabatan" class="block mt-4">Jabatan:</label>
                        <select name="jabatan_employee" id="jabatan_employee" class="w-full border-gray-300 rounded-md shadow-sm p-1">
                            <option value="{{$employee->jabatan_employee}}">{{$employee->jabatan_employee}}</option>
                            <option value="Direktur Utama">Direktur Utama</option>
                            <option value="Manajer Departemen">Manajer Departemen</option>
                            <option value="Karyawan">Karyawan</option>
                            <option value="Sekertaris">Sekertaris</option>
                            <option value="Admin">Admin</option>
                            <option value="Pemasaran">Pemasaran</option>
                            <option value="SDM">SDM</option>
                            <option value="IT">IT</option>
                            <option value="Produksi Operasi">Produksi Operasi</option>
                            <option value="CC">CC</option>
                            <option value="QEC">QEC</option>
                            <option value="R&D">R&D</option>
                            <option value="Legal">Legal</option>
                            <option value="Menejemen Proyek">Menejemen Proyek</option>
                        </select>
                    </div>
                </div>
                <div class="mt-4">
                    <button type="submit"
                        class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Simpan</button>
                    <a href="{{url("/pegawai")}}">
                        <button type="submit"
                        class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">Cancel</button>
                    </a>
                </div>
            </form>                     
        </div>
    </div>

    <!------>
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