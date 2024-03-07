@extends('kerangka')
@section('content')
<?php $no=0;?>
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Departement</h1>
        <a href="{{route('department.export.excel')}}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
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
    </div>

<!-- /.container-fluid -->
@endsection