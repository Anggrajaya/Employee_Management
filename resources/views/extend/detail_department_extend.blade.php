@extends('kerangka_dashboard_user')
@section('content')
<div>
    <header class="section-header">
        <h2></h2>
        <p></p>
    </header>
    <header class="section-header">
        <h2></h2>
        <p></p>
    </header>
</div>
<div class="">
    <!-- Page Heading -->
    
    <!-- Begin Page Content -->
    <div class="d-sm-flex align-items-center justify-content-between" id="content">
        
        @foreach ($employee as $employees)
        @if ($loop->first || $employees->NID !== $employee[$loop->index - 1]->NID)
        <div class="mb-4 mx-auto">
            <div class="card shadow mb-4">
                <div class="container p-2 mx-auto sm:p-4 dark:text-grey-700">
                    <div class="mb-4 font-semibold leading text-sm">
                        @foreach ($department as $departments)
                        @if ($departments->NID === $employees->NID)
                        <p>Detail data departement</p>
                        <p>Nama: {{ $departments->nama_departement }}</p>
                        <p>Lokasi: {{ $departments->lokasi_departement }}</p>
                        <p>Manager: {{ $departments->manager_departement }}</p>
                        @endif
                        @endforeach
                    </div>
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
                                    <th class="p-3 text-center">Jabatan</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="border-b border-opacity-20 dark:border-gray-700 dark:bg-gray-200">
                                    <td class="p-3 text-center">{{ $employees->NIP }}</td>
                                    <td class="p-3 text-center">
                                        <img class="w-20 rounded-md"
                                            src="{{ Storage::url($employees->image_pegawai) }}"
                                            alt="Foto Pegawai">
                                    </td>
                                    <td class="p-3 text-center">{{ $employees->nama_pegawai }}</td>
                                    <td class="p-3 text-center">{{ $employees->alamat_employee }}</td>
                                    <td class="p-3 text-center">{{ $employees->no_telp_employee }}</td>
                                    <td class="p-3 text-center">{{ $employees->gaji_employee }}</td>
                                    <td class="p-3 text-center">{{ $employees->NID }}</td>
                                    <td class="p-3 text-center">{{ $employees->jabatan_employee }}</td>
                                </tr>
                                @endif
                                @if ($loop->last || $employees->NID !== $employee[$loop->index + 1]->NID)
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        @endif
        @endforeach
    </div>
</div>
@endsection