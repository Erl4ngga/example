@extends('pages.layout.master')
@section('main-content')
<main id="main">

<!-- ======= Breadcrumbs ======= -->
<div class="breadcrumbs d-flex align-items-center" style="background-image: url('assets/img/portfolio-header.jpg');">
  <div class="container position-relative d-flex flex-column align-items-center">

    <h2>Kegiatan</h2>
    <ol>
      <li>Kegiatan</li>
    </ol>

  </div>
</div><!-- End Breadcrumbs -->

<!-- ======= Portfolio Details Section ======= -->
<section id="portfolio-details" class="portfolio-details">
  <div class="container" data-aos="fade-up">

    <div class="row gy-4">

      <div class="col-lg-8">
        <div class="slides-1 portfolio-details-slider swiper">
          <div class="swiper-wrapper align-items-center">

            <div class="swiper-slide">
              <img src="{{$action->photo}}" src="{{$action->photo}}">
            </div>

          </div>
          <div class="swiper-pagination"></div>
        </div>
      </div>

      <div class="col-lg-4">
        <div class="portfolio-info">
          <h3>Informasi</h3>
          <ul>
            <li><strong>Category</strong>: </li>
            <li><strong>Tag</strong>: {{$action->tags}}</li>
            <li><strong>Hari Kegiatan</strong>: {{$action->created_at->format('d M, y')}}</li>
          </ul>
        </div>
        <div class="portfolio-description">
          <h2>{{$action->title}}</h2>
          <p>
            {!! html_entity_decode($action->description)!!}
          </p>
        </div>
      </div>

    </div>

  </div>
</section><!-- End Portfolio Details Section -->
@endsection
</main><!-- End #main -->