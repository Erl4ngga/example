

@extends('pages.layout.master')
@section('main-content')
<body class="page-blog">

  <!-- ======= Header ======= -->


  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs d-flex align-items-center" style="background-image: url('frontend/assets/img/blog-header.jpg');">
      <div class="container position-relative d-flex flex-column align-items-center">

        <h2>Blog Details</h2>
        <ol>
          <li><a href="index.html">Home</a></li>
          <li>Blog Details</li>
        </ol>

      </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Blog Details Section ======= -->
    <section id="blog" class="blog">
      <div class="container" data-aos="fade-up">

        <div class="row g-5">

          <div class="col-lg-8" data-aos="fade-up" data-aos-delay="200">

            <article class="blog-details">

              <div class="post-img">
                <img src="{{$post->photo}}" alt="{{$post->photo}}" class="img-fluid">
              </div>

              <h2 class="title">{{$post->title}}</h2>

              <div class="meta-top">
                <ul>
                  <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a href="blog-details.html">{{$post->author_info->name ?? 'Anonymous'}}</a></li>
                  <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a href="blog-details.html"><time datetime="2020-01-01">{{$post->created_at->format('d M, Y. D')}}</time></a></li>
                </ul>
              </div><!-- End meta top -->

              <div class="content">
                <p>
                  {!! html_entity_decode($post->description)!!}
                </p>

                <blockquote>
                  <p>
                    {!! html_entity_decode($post->quote) !!}
                  </p>
                </blockquote>

              </div><!-- End post content -->

              <div class="meta-bottom">
                <i class="bi bi-folder"></i>
                <ul class="cats">
                  <li><a >Dakwah</a></li>
                </ul>

                
              </div><!-- End meta bottom -->

            </article><!-- End blog post -->
            <div class="post-author d-flex align-items-center">
              <img src="{{$users->photo}}" class="rounded-circle flex-shrink-0" alt="">
              <div>
                <h4>{{$post->author_info->name ?? 'Anonymous'}}</h4>
                <div class="social-links">
                </div>
              </div>
            </div><!-- End post author -->



          </div>

          <div class="col-lg-4" data-aos="fade-up" data-aos-delay="400">

            <div class="sidebar ps-lg-4">

              <div class="sidebar-item search-form">
                <h3 class="sidebar-title">Search</h3>
                <form method="GET" action="{{route('blog.search')}}" class="mt-3">
                  <input type="text">
                  <button type="submit"><i class="bi bi-search"></i></button>
                </form>
              </div><!-- End sidebar search formn-->

              <div class="sidebar-item categories">
                <h3 class="sidebar-title">Categories</h3>
                <ul class="mt-3">
                  @foreach(Helper::postCategoryList('posts') as $cat)
                  <li><a href="{{route('blog.category',$cat->slug)}}">{{$cat->title}}<span></span></a></li>
                  @endforeach
                </ul>
              </div><!-- End sidebar categories-->

              <div class="sidebar-item recent-posts">
                <h3 class="sidebar-title">Recent Posts</h3>

                <div class="mt-3">

                  <div class="post-item mt-3">
                    <img src="{{$post->photo}}" alt="{{$post->photo}}" class="flex-shrink-0">
                    <div>
                      <h4><a>{{$post->title}}</a></h4>
                      <time datetime="2020-01-01">{{$post->created_at->format('d M, y')}}</time>
                    </div>
                  </div><!-- End recent post item-->

                </div>

              </div><!-- End sidebar recent posts-->

              <div class="sidebar-item tags">
                <h3 class="sidebar-title">Tags</h3>
                <ul class="mt-3">
                  @foreach(Helper::postTagList('tags') as $post)
                  <li><a href="{{route('blog.tag',$post->title)}}">{{$post->title}}</a></li>
                  @endforeach
                </ul>
              </div><!-- End sidebar tags-->

            </div><!-- End Blog Sidebar -->

          </div>
        </div>

      </div>
    </section><!-- End Blog Details Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->

  <!-- End Footer -->

  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <div id="preloader"></div>


</body>
    
@endsection