

@extends('pages.layout.master')
@section('main-content')
<body class="page-blog">

  <!-- ======= Header ======= -->


  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs d-flex align-items-center" style="background-image: url('assets/img/blog-header.jpg');">
      <div class="container position-relative d-flex flex-column align-items-center">

        <h2>Blog</h2>
        <ol>
          <li><a href="index.html">Home</a></li>
          <li>Blog</li>
        </ol>

      </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Blog Section ======= -->
    <section id="blog" class="blog">
      <div class="container" data-aos="fade-up">

        <div class="row g-5">

          <div class="col-lg-8" data-aos="fade-up" data-aos-delay="200">
            
            <div class="row gy-5 posts-list">
              @foreach ($posts as $post)
              <div class="col-lg-6">
               
                <article class="d-flex flex-column">
                  <div class="post-img">
                    <img src="{{$post->photo}}" alt="{{$post->photo}}" class="img-fluid">
                  </div>

                  <h2 class="title">
                    <a >{{$post->title}}</a>
                  </h2>

                  <div class="meta-top">
                    <ul>
                      <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a > {{$post->author_info->name ?? 'Anonymous'}}</a></li>
                      <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a href="blog-details.html"><time datetime="2022-01-01">{{$post->created_at->format('d M, Y. D')}}</time></a></li>
                    </ul>
                  </div>

                  <div class="content">
                    <p>
                      {!! html_entity_decode($post->summary)!!}
                    </p>
                  </div>

                  <div class="read-more mt-auto align-self-end">
                    <a href="{{route('blog.detail',$post->slug)}}">Lanjutan <i class="bi bi-arrow-right"></i></a>
                  </div>
                 
                </article>
              </div><!-- End post list item -->
              @endforeach

            </div><!-- End blog posts list -->
            <div class="blog-pagination">
              <ul class="justify-content-center">
                <span style="float:right">{{$posts->links()}}</span>
              </ul>
            </div>

          </div>

          <div class="col-lg-4" data-aos="fade-up" data-aos-delay="400">

            <div class="sidebar ps-lg-4">

              <div class="sidebar-item search-form">
                <h3 class="sidebar-title">Search</h3>
                <form class="mt-3" method="GET" action="{{route('blog.search')}}">
                  <input type="text" name="search">
                  <button type="submit"><i class="bi bi-search"></i></button>
                </form>
              </div><!-- End sidebar search formn-->

              <form class="sidebar-item categories" action="{{route('blog.filter')}}" method="POST">
                @csrf
                <h3 class="sidebar-title">Categories</h3>
                <ul class="mt-3">
                  @foreach(Helper::postCategoryList('posts') as $cat)
                  <li><a href="{{route('blog.category',$cat->slug)}}">{{$cat->title}}<span></span></a></li>
                  @endforeach
                </ul>
              </form><!-- End sidebar categories-->

              <div class="sidebar-item recent-posts">
                
                <h3 class="sidebar-title">Postingan Terbaru</h3>
                @foreach($recent_posts as $post)
                <div class="mt-3">

                  <div class="post-item mt-3">
                    <img src="{{$post->photo}}" alt="{{$post->photo}}" class="flex-shrink-0">
                    <div>
                      <h4><a href="blog-post.html">{{$post->title}}</a></h4>
                      <time datetime="2020-01-01">{{$post->created_at->format('d M, y')}}</time>
                    </div>
                  </div><!-- End recent post item-->
                </div>
                @endforeach
              </div><!-- End sidebar recent posts-->

              <div class="sidebar-item tags">
                <h3 class="sidebar-title">Tags</h3>
                <ul class="mt-3" action="{{route('blog.filter')}}" method="POST">
                  @foreach(Helper::postTagList('tags') as $post)
                  <li><a href="{{route('blog.tag',$post->title)}}">{{$post->title}}</a></li>
                  @endforeach
                </ul>
              </div><!-- End sidebar tags-->

            </div><!-- End Blog Sidebar -->

          </div>

        </div>

      </div>
    </section><!-- End Blog Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->

  <!-- End Footer -->

  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <div id="preloader"></div>


</body>
    
@endsection