@extends('kerangka_dashboard_user')
@section('content')
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4"></a>
    </div>
    <header class="section-header">
        <h2></h2>
        <p></p>
    </header>

    <!----berbahaya---->
    <section id="services" class="services">

        <div class="container" data-aos="fade-up">

            <header class="section-header">
                <h2>Detail Karyawan</h2>
                <p>Detail Karyawan Anda</p>
            </header>
            @foreach ($employee as $employees)
            <div class="row gy-4">

                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                    <div class="service-box blue">
                        <i class="ri-discuss-line icon">
                            <img class="h-20" src="{{Storage::url($employees->image_pegawai)}}" alt="">
                        </i>
                        <h3>{{$employees->nama_pegawai}}</h3>
                        <p>Nama : {{$employees->nama_pegawai}}</p>
                        <p>Alamat : {{$employees->alamat_employee}}</p>
                        <p>No Telp : {{$employees->no_telp_employee}}</p>
                        <p>Jabatan : {{$employees->jabatan_employee}}</p>
                        <p>NID : {{$employees->NID}}</p>
                        <p>Gaji : {{$employees->gaji_employee}}</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </section>
    <!----------------->
</div>
@endsection