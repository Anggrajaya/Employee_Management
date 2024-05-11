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

    <!-----bahaya---->
    <section id="services" class="services">

        <div class="container" data-aos="fade-up">

            <header class="section-header">
                <h2>Data Cuti</h2>
                <p>Data Cuti Karyawan Anda</p>
            </header>
            @foreach ($cuti as $cuties)
            <div class="row gy-4">

                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                    <div class="service-box blue">
                        <i class="ri-discuss-line icon">
                            <i class="fas fas fa-fw fa-clock fa-2x"></i>
                        </i>
                        <h3>{{$cuties->NIP}}</h3>
                        <p>Nama : {{$cuties->nama_employee}}</p>
                        <p>Tanggal Mulai : {{$cuties->tanggal_mulai}}</p>
                        <p>Tanggal Selesai : {{$cuties->tanggal_selesai}}</p>
                        <p>Jenis : {{$cuties->jenis_cuti}}</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </section>
    <!---->
</div>
@endsection