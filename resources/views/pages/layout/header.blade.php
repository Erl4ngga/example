<header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

      <a href="index.html" class="logo d-flex align-items-center">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.png" alt=""> -->
        <h1 class="d-flex align-items-center">Babusalam</h1>
      </a>

      <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="/">Home</a></li>
          <li><a href="{{route('about')}}" class="active">About</a></li>
         {{-- <li><a href="{{route('service')}}">Services</a></li>--}}
          <li><a href="{{route('portfolio')}}">Kegiatan</a></li>
          <li><a href="{{route('team')}}">Pengurus</a></li>
          <li><a href="{{route('blog')}}">Blog</a></li>
          <li><a href="{{route('contact')}}">Contact</a></li>
        </ul>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->