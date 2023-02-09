@extends('pages.layout.master')
@section('main-content')
<body class="page-about">

  <!-- ======= Header ======= -->


  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs d-flex align-items-center" style="background-image: url('assets/img/about-header.jpg');">
      <div class="container position-relative d-flex flex-column align-items-center">

        <h2>About</h2>
        <ol>
          <li>About</li>
        </ol>

      </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="row gy-4" data-aos="fade-up">
          <div class="col-lg-4">
            <img src="frontend/assets/img/cta-bg.jpg" class="img-fluid" alt="">
          </div>
          <div class="col-lg-8">
            <div class="content ps-lg-5">
              <h3>Masjid Babusalam Berkemajuan</h3>
              <p>
                Kami menyelenggarakan berbagai kegiatan dakwah
              </p>
              <ul>
                <li><i class="bi bi-check-circle-fill"></i> Gerakan Subuh Ceria</li>
                <li><i class="bi bi-check-circle-fill"></i> Kajian Ba'da Mag'rib</li>
                {{--<li><i class="bi bi-check-circle-fill"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>--}}
              </ul>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->


    <!-- ======= Call To Action Section ======= -->
    <section id="call-to-action" class="call-to-action">
      <div class="container" data-aos="fade-up">
        <div class="row justify-content-center">
          <div class="col-lg-6 text-center">
            <h3>Masjid Babusalam Mojokerto</h3>
            <p>Ikuti Kegiatan kami</p>
            <a class="cta-btn" href="{{route('portfolio')}}">Info Kegiatan</a>
          </div>
        </div>

      </div>
    </section><!-- End Call To Action Section -->

    <!-- ======= Team Section ======= -->
    <section id="team" class="team">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Pengurus</h2>

        </div>

        <div class="row gy-4">
          @foreach ($users as $team)
          <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="team-member">
              <div class="member-img">
                <img src="{{$team->photo}}" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>{{$team->name}}</h4>
                <span>{{$team->role}}</span>
              </div>
            </div>
          </div><!-- End Team Member -->
          @endforeach
        </div>

      </div>
    </section><!-- End Team Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->

  <!-- End Footer -->

  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <div id="preloader"></div>

  <!-- Vendor JS Files -->


</body>


    
@endsection