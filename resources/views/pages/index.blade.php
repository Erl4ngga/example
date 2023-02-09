

@extends('pages.layout.master')
@section('title','GRO-MART || HOME PAGE')
@section('main-content')

  <!-- ======= Header ======= -->


  <!-- ======= Hero Section ======= -->
  <section id="hero" class="hero d-flex align-items-center">
    <div class="container">
      <div class="row">
        <div class="col-xl-4">
          <h2 data-aos="fade-up">Masjid Babusalam</h2>
          <blockquote data-aos="fade-up" data-aos-delay="100">
            <p>Masjid Yang Terletak di Kota Mojokerto,jawa Timur</p>
          </blockquote>
          <div class="d-flex" data-aos="fade-up" data-aos-delay="200">
            <a href="{{route('about')}}" class="btn-get-started">Tentang Kita</a>
            <a href="https://www.youtube.com/watch?v=" class="glightbox btn-watch-video d-flex align-items-center"><i class="bi bi-play-circle"></i><span>Watch Video</span></a>
          </div>

        </div>
      </div>
    </div>
  </section><!-- End Hero Section -->

  <main id="main">

    <!-- ======= Why Choose Us Section ======= -->

    <!-- ======= Our Services Section ======= -->
    {{--<section id="services-list" class="services-list">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Fasilitas</h2>

        </div>

        <div class="row gy-5">

          <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="100">
            <div class="icon flex-shrink-0"><i class="bi bi-briefcase" style="color: #f57813;"></i></div>
            <div>
              <h4 class="title"><a href="#" class="stretched-link">Lorem Ipsum</a></h4>
              <p class="description">Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident</p>
            </div>
          </div>
          <!-- End Service Item -->

          <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="200">
            <div class="icon flex-shrink-0"><i class="bi bi-card-checklist" style="color: #15a04a;"></i></div>
            <div>
              <h4 class="title"><a href="#" class="stretched-link">Dolor Sitema</a></h4>
              <p class="description">Minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat tarad limino ata</p>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="300">
            <div class="icon flex-shrink-0"><i class="bi bi-bar-chart" style="color: #d90769;"></i></div>
            <div>
              <h4 class="title"><a href="#" class="stretched-link">Sed ut perspiciatis</a></h4>
              <p class="description">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur</p>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="400">
            <div class="icon flex-shrink-0"><i class="bi bi-binoculars" style="color: #15bfbc;"></i></div>
            <div>
              <h4 class="title"><a href="#" class="stretched-link">Kajian</a></h4>
              <p class="description">Kegiatan Ini </p>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="500">
            <div class="icon flex-shrink-0"><i class="bi bi-brightness-high" style="color: #f5cf13;"></i></div>
            <div>
              <h4 class="title"><a href="#" class="stretched-link">Subuh Ceria</a></h4>
              <p class="description">Kegiatan Ini Rutin hari Minggu waktu Subuh</p>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="600">
            <div class="icon flex-shrink-0"><i class="bi bi-calendar4-week" style="color: #1335f5;"></i></div>
            <div>
              <h4 class="title"><a href="#" class="stretched-link">Eiusmod Tempor</a></h4>
              <p class="description">Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi</p>
            </div>
          </div><!-- End Service Item -->

        </div>

      </div>
    </section><!-- End Our Services Section -->--}}

    <!-- ======= Call To Action Section ======= -->

    <!-- ======= Features Section ======= -->
    <section id="features" class="features">


      <div class="details">
        <div class="container" data-aos="fade-up" data-aos-delay="300">
          <div class="row">
            <div class="col-md-6">
              <h4>Masjid Babusalam<br>Berkemajuan</h4>
              <p>Tidak hanya berdakwah di masjid,tetapi juga berdakwah lewat internet</p>
              <a href="{{route('blog')}}" class="btn-get-started">Info Blog</a>
            </div>
          </div>

        </div>
      </div>

    </section><!-- End Features Section -->
    <section id="call-to-action" class="call-to-action">
      <div class="container" data-aos="fade-up">
        <div class="row justify-content-center">
          <div class="col-lg-6 text-center">
            <h3>Masjid Babusalam Mojokerto</h3>
            <p>Masjid ini menyelenggarakan berbagai Kegiatan</p>
            <a class="cta-btn" href="{{route('portfolio')}}">Info Kegiatan</a>
          </div>
        </div>

      </div>
    </section><!-- End Call To Action Section -->

    <!-- ======= Recent Blog Posts Section ======= -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->


  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <div id="preloader"></div>

  <!-- Vendor JS Files -->

@endsection