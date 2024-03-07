@extends('kerangka')
@section('content')
<?php $no=0;?>
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Pegawai</h1>
        @error('NIP')
        <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
            <strong class="font-bold">Alert !</strong>
            <span class="block sm:inline">{{ $message }}</span>
            <span class="absolute top-0 bottom-0 right-0 px-4 py-3">
        </div>
        @enderror

        <a href="{{ route('employees.export.excel') }}"
            class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                class="fas fa-download fa-sm text-white-50"></i>
            Download Laporan</a>
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
                                <form method="post" action="{{ route('pegawai.store') }}" enctype="multipart/form-data">
                                    @csrf
                                    @method('post')
                                    <div class="grid grid-cols-1 gap-4 md:grid-cols-3">
                                        <div>
                                            <label for="NIP" class="col-span-3">NIP:</label>
                                            <input type="text" name="NIP" id="nama" placeholder="NIP"
                                                class="col-span-3">
                                        </div>
                                        <div>
                                            <label for="nama" class="col-span-3">Nama:</label>
                                            <input type="text" name="nama_pegawai" id="nama" placeholder="Nama"
                                                class="col-span-3">
                                        </div>
                                        <div>
                                            <label for="image_pegawai" class="col-span-3">Gambar:</label>
                                            <input type="file" name="image_pegawai" id="image_pegawai"
                                                placeholder="Gambar Pegawai" class="col-span-3">
                                        </div>
                                        <div>
                                            <label for="alamat" class="col-span-3">Alamat:</label>
                                            <input type="text" name="alamat_employee" id="alamat" placeholder="Alamat"
                                                class="col-span-3">
                                        </div>
                                        <div>
                                            <label for="no telp" class="col-span-3">No
                                                Telp:</label>
                                            <input type="text" name="no_telp_employee" id="no telp"
                                                placeholder="No Telephone" class="col-span-3">
                                        </div>
                                        <div>
                                            <label for="gaji" class="col-span-3">Gaji:</label>
                                            <input type="text" name="gaji_employee" id="gaji" placeholder="Gaji"
                                                class="col-span-3">
                                        </div>
                                        <div>
                                            <label for="job" class="col-span-3">NID:</label>
                                            <input type="text" name="NID" id="NID" placeholder="NID" class="col-span-3">
                                        </div>
                                        <div>
                                            <label for="jabatan" class="col-span-3 pt-1">Jabatan:</label><br>
                                            <select name="jabatan_employee" id="lang" class="col-span-3">
                                                <option value="">Pilih Jabatan</option>
                                                <option value="Direktur Utama">Direktur Utama
                                                </option>
                                                <option value="Manajer Departemen">Manajer
                                                    Departemen</option>
                                                <option value="Karyawan">Karyawan</option>
                                                <option value="Sekertaris">Sekertaris</option>
                                                <option value="Admin">Admin</option>
                                                <option value="Pemasaran">Pemasaran</option>
                                                <option value="SDM">SDM</option>
                                                <option value="IT">IT</option>
                                                <option value="Produksi Operasi">Produksi
                                                    Operasi</option>
                                                <option value="CC">CC</option>
                                                <option value="QEC">QEC</option>
                                                <option value="R&D">R&D</option>
                                                <option value="Legal">Legal</option>
                                                <option value="Menejemen Proyek">Menejemen
                                                    Proyek</option>
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
                                    <th class="p-3 text-center">No</th>
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
                                <tr class="border-b border-opacity-20 dark:border-gray-700 dark:bg-gray-200">
                                    <td class="p-3">
                                        <p>{{++$no}}</p>
                                    </td>
                                    <td class="p-3">
                                        <p>{{$employees->NIP}}</p>
                                    </td>
                                    <td class="p-3">
                                        <img class="w-20 rounded-md" src="{{Storage::url($employees->image_pegawai)}}"
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
                                            <form class="dark:text-gray-100" id="deleteForm{{$employees->id}}"
                                                method="post"
                                                action="{{route('pegawai.destroy',['employee' => $employees->id])}}">
                                                @csrf
                                                @method('delete')
                                                <button type="submit"
                                                    class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded"
                                                    onclick="onclick="
                                                    confirmDelete({{$employees->id}})">Delete</button>
                                            </form>
                                            <a href="{{ route('pegawai.edit', ['employee' => $employees]) }}">
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

        <!-- /.container-fluid -->
    </div>
    <!-- End of Main Content -->

    <!-- Footer -->
    @include('layouts.footer')
    <!-- End of Footer -->

</div>
@endsection