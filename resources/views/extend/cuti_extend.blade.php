@extends('kerangka')
@section('content')
<?php $no=0;?>
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Cuti</h1>
        <a href="{{route('cuti.export.excel')}}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                class="fas fa-download fa-sm text-white-50"></i> Download Laporan</a>
    </div>

    <!-- Content Row -->
    <div class="row">
        <!-- Input Table -->
        <div class=" mb-4 mx-auto">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body w-900">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div
                                class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                <form method="post" action="{{ route('cuti.store') }}"
                                    enctype="multipart/form-data">
                                    @csrf
                                    @method('post')
                                    <div class="grid grid-cols-1 gap-4 md:grid-cols-3">
                                        <div>
                                            <label for="NIP" class="col-span-3">NIP:</label>
                                            <input type="text" name="NIP" id="NIP"
                                                placeholder="NIP" class="col-span-3">
                                        </div>
                                        <div>
                                            <label for="nama" class="col-span-3">Nama:</label>
                                            <input type="text" name="nama_employee" id="nama"
                                                placeholder="Nama" class="col-span-3">
                                        </div>
                                        <div>
                                            <label for="nama" class="col-span-3">Tanggal
                                                Mulai:</label>
                                            <input type="date" name="tanggal_mulai"
                                                id="tanggal_mulai" placeholder=""
                                                class="col-span-3">
                                        </div>
                                        <div>
                                            <label for="alamat" class="col-span-3">Tanggal
                                                Selesai:</label>
                                            <input type="date" name="tanggal_selesai"
                                                id="tanggal_selesai" placeholder=""
                                                class="col-span-3">
                                        </div>
                                        <div>
                                            <label for="jenis_cuti" class="col-span-3 pt-1">Jenis
                                                Cuti:</label><br>
                                            <select name="jenis_cuti" id="lang"
                                                class="col-span-3">
                                                <option value="">Pilih Jenis</option>
                                                <option value="Hamil">Hamil</option>
                                                <option value="Sakit">Sakit</option>
                                                <option value="Keperluan">Keperluan</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="pt-4 mt-2">
                                        <input type="submit" value="Simpan">
                                    </div>
                            </div>
                            <div>
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
                    <h2 class="mb-4 text-2xl font-semibold leadi">Data Cuti</h2>
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
                                    <th class="p-3 text-center">NIP</th>
                                    <th class="p-3 text-center">Nama</th>
                                    <th class="p-3 text-center">Tanggal Mulai</th>
                                    <th class="p-3 text-center">Tanggal Selesai</th>
                                    <th class="p-3 text-center">Jenis Cuti</th>
                                    <th class="p-3 text-center">Action</th>
                                </tr>
                            </thead>
                            <tbody>

                                @foreach ($cuti as $cuties)
                                <tr
                                    class="border-b border-opacity-20 dark:border-gray-700 dark:bg-gray-200">
                                    <td class="p-3">
                                        <p>{{++$no}}</p>
                                    </td>
                                    <td class="p-3">
                                        <p>{{$cuties->NIP}}</p>
                                    </td>
                                    <td class="p-3">
                                        <p>{{$cuties->nama_employee}}</p>
                                    </td>
                                    <td class="p-3">
                                        <p>{{$cuties->tanggal_mulai}}</p>
                                    </td>
                                    <td class="p-3">
                                        <p>{{$cuties->tanggal_selesai}}</p>
                                    </td>
                                    <td class="p-3 text-right">
                                        <p>{{$cuties->jenis_cuti}}</p>
                                    </td>
                                    <td class="p-3 text-right">
                                        <div class="flex flex-row gap-4 items-center">
                                            <form class="dark:text-gray-100"
                                                id="deleteForm{{$cuties->id}}" method="post"
                                                action="{{route('cuti.destroy',['cuti' => $cuties->id])}}">
                                                @csrf
                                                @method('delete')
                                                <button type="submit"
                                                    class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded"
                                                    onclick="onclick="
                                                    confirmDelete({{$cuties->id}})">Delete</button>
                                            </form>
                                            <a
                                                href="{{ route('cuti.edit', ['cuti' => $cuties]) }}">
                                                <button
                                                    class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded"
                                                    value="{{$cuties->id}}">Edit</button>
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
@endsection
