
@extends('pages.layout.master')

@section('main-content')
    

<body class="page-team">

  <!-- ======= Header ======= -->


  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs d-flex align-items-center" style="background-image: url('assets/img/team-header.jpg');">
      <div class="container position-relative d-flex flex-column align-items-center">

        <h2>Pengurus</h2>
        <ol>
          <li><a href="index.html">Home</a></li>
          <li>Pengurus</li>
        </ol>

      </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Team Section ======= -->
    <section id="team" class="team">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Tim Pengurus</h2>

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


  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <div id="preloader"></div>

  <!-- Vendor JS Files -->
    
</body>
@endsection