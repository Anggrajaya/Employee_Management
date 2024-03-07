@extends('kerangka')
@section('content')
<div class="container-fluid">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Detail Pegawai</h1>
        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
    </div>
    <!-- Begin Page Content -->
    <div class="row">
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
                        @if ($departments->NID === $employees->NID)
                        <p>Lokasi: {{ $departments->lokasi_departement }}</p>
                        @endif
                        @if ($departments->NID === $employees->NID)
                        <p>Manager: {{ $departments->manager_departement }}</p>
                        @endif
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
                                @endif
                                <tr
                                    class="border-b border-opacity-20 dark:border-gray-700 dark:bg-gray-200">
                                    <td class="p-3">
                                        <p class="text-center">{{ $employees->NIP }}</p>
                                    </td>
                                    <td class="p-3">
                                        <img class="w-20 rounded-md text-center "
                                            src="{{ Storage::url($employees->image_pegawai) }}"
                                            alt="Foto Pegawai">
                                    </td>
                                    <td class="p-3">
                                        <p class="text-center">{{ $employees->nama_pegawai }}
                                        </p>
                                    </td>
                                    <td class="p-3">
                                        <p class="text-center">{{ $employees->alamat_employee }}
                                        </p>
                                    </td>
                                    <td class="p-3">
                                        <p class="text-center">{{ $employees->no_telp_employee
                                            }}
                                        </p>
                                    </td>
                                    <td class="p-3">
                                        <p class="text-center">{{ $employees->gaji_employee }}
                                        </p>
                                    </td>
                                    <td class="p-3">
                                        <p class="text-center">{{ $employees->NID }}</p>
                                    </td>
                                    <td class="p-3">
                                        <p class="text-center">{{ $employees->jabatan_employee
                                            }}
                                        </p>
                                    </td>
                                </tr>
                                @if ($loop->last || $employees->NID !== $employee[$loop->index +
                                1]->NID)
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