@extends('kerangka')
@section('content')
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Detail Pegawai</h1>
        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
    </div>

    <!-- Content Row -->
    <div class="m-auto">
        <div class="row">
            <!-- Card Detail Pegawai -->
            @foreach ($employee as $employees)
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-primary shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div
                                    class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                    <p>{{$employees->NIP}}</p>
                                </div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">
                                    <p class="text-xs">Nama : {{$employees->nama_pegawai}}</p>
                                    <p class="text-xs">Alamat : {{$employees->alamat_employee}}</p>
                                    <p class="text-xs">No Telp : {{$employees->no_telp_employee}}
                                    </p>
                                    <p class="text-xs">Jabatan : {{$employees->jabatan_employee}}
                                    </p>
                                    <p class="text-xs">NID : {{$employees->NID}}</p>
                                    <p class="text-xs">Gaji : {{$employees->gaji_employee}}</p>
                                </div>
                            </div>
                            <div class="col-auto rounded-md">
                                <img class="h-20" src="{{Storage::url($employees->image_pegawai)}}"
                                    alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection