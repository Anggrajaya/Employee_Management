@extends('kerangka_dashboard_user')
@section('content')
<section>
  <!-- ======= Hero Section ======= -->
  <section id="hero" class="hero d-flex align-items-center">

    <div class="container">
      <div class="row">
        <div class="col-lg-6 d-flex flex-column justify-content-center">
          <h1 data-aos="fade-up">Menawarkan Pencatatan Karyawan Yang Aman Dan Mudah</h1>
          <h2 data-aos="fade-up" data-aos-delay="400">Dibuat Untuk Mempermudah Pencatatan Karyawan Menjadi Lebih Mudah
          </h2>
          <div data-aos="fade-up" data-aos-delay="600">
            <div class="text-center text-lg-start">
              <a href="#about"
                class="btn-get-started scrollto d-inline-flex align-items-center justify-content-center align-self-center">
                <span>Get Started</span>
                <i class="bi bi-arrow-right"></i>
              </a>
            </div>
          </div>
        </div>
        <div class="col-lg-6 hero-img" data-aos="zoom-out" data-aos-delay="200">
          <img src="{{ asset('storage/images/hero-img.png') }}" class="img-fluid" alt="">
        </div>
      </div>
    </div>

  </section><!-- End Hero -->

  <main id="main">
    <!-- ======= Detail Karyawan ======= -->
    <section id="detail_karyawan" class="services">

      <div class="container" data-aos="fade-up">

        <header class="section-header">
          <h2>Data Karyawan</h2>
          <p>Data Karyawan Anda</p>
        </header>

        <div class="row gy-4">

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
            <div class="service-box blue">
              <i class="ri-discuss-line icon">
                {{$jumlah_pegawai}}
              </i>
              <h3>Jumlah Karyawan </h3>
              <p>Provident nihil minus qui consequatur non omnis maiores. Eos accusantium minus dolores iure
                perferendis
                tempore et consequatur.</p>
                <a href="{{url('detail_pegawai')}}" class="read-more"><span>Read More</span> <i class="bi bi-arrow-right"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
            <div class="service-box orange">
              <i class="ri-discuss-line icon">{{$jumlah_cuti}}</i>
              <h3>Jumlah Cuti</h3>
              <p>Ut autem aut autem non a. Sint sint sit facilis nam iusto sint. Libero corrupti neque eum hic non ut
                nesciunt dolorem.</p>
              <a href="{{url('detail_cuti')}}" class="read-more"><span>Read More</span> <i class="bi bi-arrow-right"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
            <div class="service-box green">
              <i class="ri-discuss-line icon">{{$jumlah_department}}</i>
              <h3>Jumlah Departemen</h3>
              <p>Ut excepturi voluptatem nisi sed. Quidem fuga consequatur. Minus ea aut. Vel qui id voluptas adipisci
                eos earum corrupti.</p>
              <a href="{{url('detail_department')}}" class="read-more"><span>Read More</span> <i class="bi bi-arrow-right"></i></a>
            </div>
          </div>

        </div>

      </div>

    </section>
    <!-- End Services Section -->

    <!-- ======= Team Section ======= -->
    <section id="team" class="team">

      <div class="container" data-aos="fade-up">

        <header class="section-header">
          <h2>Team</h2>
          <p>Our hard working team</p>
        </header>

        <div class="row gy-4 d-sm-flex align-items-center justify-content-between mb-4">

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
            <div class="member">
              <div class="member-img">
                <img class="member-img" src="{{ asset('storage/images/team/team-1.jpg') }}" class="img-fluid" alt="">
                <div class="social">
                  <a href="https://github.com/nurayuu21"><i class="bi bi-github"></i></a>
                  <a href="https://www.instagram.com/yellow_nuraa?igsh=ZDFsbnM4N25zdGg%3D"><i class="bi bi-instagram"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Nur Ayu Sulistyoningtyas</h4>
                <span>Frontend</span>
                <p>Velit aut quia fugit et et. Dolorum ea voluptate vel tempore tenetur ipsa quae aut. Ipsum
                  exercitationem iure minima enim corporis et voluptate.</p>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
            <div class="member">
              <div class="member-img">
                <img class="member-img" src="{{ asset('storage/images/team/team-2.jpg') }}" class="img-fluid" alt="">
                <div class="social">
                  <a href="https://github.com/wafiqazizah28"><i class="bi bi-github"></i></a>
                  <a href="https://www.instagram.com/morszah?igsh=dHA0Mmo1MDY3dzhx"><i class="bi bi-instagram"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Wafiq Azizah</h4>
                <span>Frontend</span>
                <p>Quo esse repellendus quia id. Est eum et accusantium pariatur fugit nihil minima suscipit corporis.
                  Voluptate sed quas reiciendis animi neque sapiente.</p>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="300">
            <div class="member">
              <div class="member-img">
                <img class="member-img" src="{{ asset('storage/images/team/team-3.jpg') }}" class="img-fluid" alt="">
                <div class="social">
                  <a href="https://github.com/Anggrajaya"><i class="bi bi-github"></i></a>
                  <a href="https://www.instagram.com/wijayaanggraena7"><i class="bi bi-instagram"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Anggraena Wijaya</h4>
                <span>Frontend & Backend</span>
                <p>Vero omnis enim consequatur. Voluptas consectetur unde qui molestiae deserunt. Voluptates enim aut
                  architecto porro aspernatur molestiae modi.</p>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="400">
            <div class="member">
              <div class="member-img">
                <img class="member-img" src="{{ asset('storage/images/team/team-4.jpg') }}" class="img-fluid" alt="">
                <div class="social">
                  <a href="https://github.com/Fxxel"><i class="bi bi-github"></i></a>
                  <a href="https://www.instagram.com/fxxel_?igsh=ejBkNTBhNjdoMTV5"><i class="bi bi-instagram"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Ferdinand Axel Valerian</h4>
                <span>Backend</span>
                <p>Rerum voluptate non adipisci animi distinctio et deserunt amet voluptas. Quia aut aliquid
                  doloremque
                  ut possimus ipsum officia.</p>
              </div>
            </div>
          </div>

          <div class="row justify-content-center pt-5">
            <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="400">
                <div class="member">
                    <div class="member-img">
                        <img class="member-img" src="{{ asset('storage/images/team/team-5.jpg') }}" class="img-fluid" alt="">
                        <div class="social">
                            <a href="https://github.com/YDNAHSWERD"><i class="bi bi-github"></i></a>
                        </div>
                    </div>
                    <div class="member-info">
                        <h4>Drewshandy Artdya S.P</h4>
                        <span>Backend</span>
                        <p>Rerum voluptate non adipisci animi distinctio et deserunt amet voluptas. Quia aut aliquid doloremque ut possimus ipsum officia.</p>
                    </div>
                </div>
            </div>
        </div>        
        </div>

      </div>

    </section>
    <!-- End Team Section -->

  </main>
</section>
@endsection