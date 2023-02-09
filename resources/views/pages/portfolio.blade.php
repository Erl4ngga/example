
@extends('pages.layout.master')
@section('main-content')
<body class="page-portfolio">

  <!-- ======= Header ======= -->


  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs d-flex align-items-center" style="background-image: url('assets/img/portfolio-header.jpg');">
      <div class="container position-relative d-flex flex-column align-items-center">

        <h2>Kegiatan</h2>
        <ol>
          <li><a href="index.html">Home</a></li>
          <li>Kegiatan</li>
        </ol>

      </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
      <div class="container" data-aos="fade-up">

        <div class="portfolio-isotope" data-portfolio-filter="*" data-portfolio-layout="masonry" data-portfolio-sort="original-order">
          <ul class="portfolio-flters" data-aos="fade-up" data-aos-delay="100">
            <li data-filter="*" class="filter-active">All</li>
            @foreach(Helper::postTagList('tags') as $cat)
            <li data-filter=".{{$cat->title}}">{{$cat->title}}</li>
            @endforeach
          </ul><!-- End Portfolio Filters -->

          <div class="row gy-4 portfolio-container" data-aos="fade-up" data-aos-delay="300">
            @foreach(Helper::actionList('posts') as $item)
                
            <div class="col-lg-4 col-md-6 portfolio-item {{$item->tags}}">
              <img src="{{$item->photo}}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>{{$item->title}}</h4>
                <a href="{{$item->photo}}"  data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                <a href="{{route('portfolio.detail',$item->slug)}}"title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div><!-- End Portfolio Item -->
            @endforeach
          </div><!-- End Portfolio Container -->

        </div>

      </div>
    </section><!-- End Portfolio Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->


  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <div id="preloader"></div>

  <!-- Vendor JS Files -->

</body>

    
@endsection