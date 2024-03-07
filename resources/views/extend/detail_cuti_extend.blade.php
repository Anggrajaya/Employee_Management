@extends('kerangka')
@section('content')
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Detail Cuti</h1>
        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
    </div>

    <!-- Content Row -->
    <div class="m-auto">
        <div class="row">
            <!-- Card Detail Pegawai -->
            @foreach ($cuti as $cuties)
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-success shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div
                                    class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                    <p>{{$cuties->NIP}}</p>
                                </div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">
                                    <p class="text-xs">Nama : {{$cuties->nama_employee}}</p>
                                    <p class="text-xs">Tanggal Mulai : {{$cuties->tanggal_mulai}}</p>
                                    <p class="text-xs">Tanggal Selesai : {{$cuties->tanggal_selesai}}
                                    </p>
                                    <p class="text-xs">Jenis : {{$cuties->jenis_cuti}}
                                    </p>
                                </div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fas fa-fw fa-clock fa-2x text-gray-300"></i>
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