<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet">

    <title>Laravel - Lancer</title>
<!--

TemplateMo 548 Training Studio

https://templatemo.com/tm-548-training-studio

-->
    <!-- Additional CSS Files -->
    <link rel="stylesheet" type="text/css" href="{{ asset('homepages/assets/css/bootstrap.min.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('homepages/assets/css/font-awesome.css') }}">

    <link rel="stylesheet" href="{{ asset('homepages/assets/css/templatemo-training-studio.css') }}">

    </head>
    
    <body>
    
    <!-- ***** Preloader Start ***** -->
    <div id="js-preloader" class="js-preloader">
      <div class="preloader-inner">
        <span class="dot"></span>
        <div class="dots">
          <span></span>
          <span></span>
          <span></span>
        </div>
      </div>
    </div>
    <!-- ***** Preloader End ***** -->
    
    
    <!-- ***** Header Area Start ***** -->
    @includeIf('homepages.partials.header')
    <!-- ***** Header Area End ***** -->

    <!-- ***** Main Banner Area Start ***** -->
    <div class="main-banner" id="top">
        <video autoplay muted loop id="bg-video">
            {{-- <source src="{{ asset('homepages/assets/images/gym-video.mp4') }}" type="video/mp4" /> --}}
        </video>

        <div class="video-overlay header-text">
            <div class="caption">
                <h6>work harder, get stronger</h6>
                <h3>The PHP Framework for Web Artisans</h3>
                <div class="main-button scroll-to-section">
                    <a href="#features">Join with us</a>
                </div>
            </div>
        </div>
    </div>
    <!-- ***** Main Banner Area End ***** -->
    @yield('content')
    <!-- ***** Footer Start ***** -->
    @includeIf('homepages.partials.footer')

    <!-- jQuery -->
    <script src="{{ asset('homepages/assets/js/jquery-2.1.0.min.js') }}"></script>

    <!-- Bootstrap -->
    <script src="{{ asset('homepages/assets/js/popper.js') }}"></script>
    <script src="{{ asset('homepages/assets/js/bootstrap.min.js') }}"></script>

    <!-- Plugins -->
    <script src="{{ asset('homepages/assets/js/scrollreveal.min.js') }}"></script>
    <script src="{{ asset('homepages/assets/js/waypoints.min.js') }}"></script>
    <script src="{{ asset('homepages/assets/js/jquery.counterup.min.js') }}"></script>
    <script src="{{ asset('homepages/assets/js/imgfix.min.js') }}"></script> 
    <script src="{{ asset('homepages/assets/js/mixitup.js') }}"></script> 
    <script src="{{ asset('homepages/assets/js/accordions.js') }}"></script>
    
    <!-- Global Init -->
    <script src="{{ asset('homepages/assets/js/custom.js') }}"></script>

  </body>
</html>