
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Responsive Shop Theme">
    <meta name="keywords" content="responsive, retina ready, shop bootstrap template, html5, css3" />
    <meta name="author" content="KingStudio.ro">

    <!-- favicon -->
    <link rel="icon" href="{{ asset('lib/inCart/images/favicon.png')}}">
    <!-- page title -->
    <title>@if(!empty($title)){{ $title }}@endif</title>
    <!-- bootstrap css -->
    <link href="{{ asset('lib/inCart/css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- css -->
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link href="{{ asset('lib/inCart/css/style.css')}}" rel="stylesheet">
    <link href="{{ asset('lib/inCart/css/animate.css')}}" rel="stylesheet">
    <link href="{{ asset('lib/inCart/css/owl.carousel.css')}}" rel="stylesheet">
    <link href="{{ asset('lib/inCart/css/owl.theme.css')}}" rel="stylesheet">
    <!-- fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:400,500,700" rel="stylesheet">
    <link href="{{ asset('lib/inCart/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">
    <link href='{{ asset('lib/inCart/fonts/FontAwesome.otf')}}' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="{{ asset('lib/inCart/css/linear-icons.css')}}">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet" type="text/css"/>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script>var BASE_URL = "{{ url('') }}/";</script>
  </head>

  <body>

    <!-- preloader -->
    <div id="preloader">
      <div class="spinner spinner-round"></div>
    </div>
    <!-- / preloader -->

    <!-- header -->
    <header>

      @include('inc.nav')


    </header>
    <!-- / header -->

    <section id="newsletter">
      <div class="container">
        <form method="GET" action="{{ url('shop/search') }}" autocomplete="off" novalidate="novalidate">
          <div class="input-group">
            <label for="search" class="hidden">Search a photo</label>
            <input type="text" name="search" value="{{ request()->input('search') }}" id="search" class="form-control rounded" placeholder="Search a photo...">
            <span class="input-group-btn">
            <input type="submit" name="submit" class="btn btn-primary-filled btn-left btn-newsletter btn-rounded" value="Search">
            </span>
          </div><!-- /input-group -->
        </form>
      </div><!-- / container -->
    </section>

    <div class="container">

      @include('inc.sm')
      @if($errors->any())
      <div class="row">
        <div class="col-md-12">
          <div class="alert alert-danger">
            <ul>
              @foreach($errors->all() as $error)
              <li>{{$error}}</li>
              @endforeach
            </ul>
          </div>
        </div>
      </div>
      @endif
      @yield('main_content')
    </div>

    <!-- footer -->
    <footer class="light-footer">
      <div class="widget-area">
        <div class="container">
          <div class="row">

            <div class="col-sm-12 col-md-6 widget">
              <div class="about-widget">
                <div class="widget-title-image">
                  <img src="{{ asset('images/logo7.png') }}" alt="">
                </div>
                <p>Praesent sed congue ipsum. Nullam tempus ornare est, non aliquet velit tincidunt elementum. Nulla at risus ut felis eleifend. Nulla non lacinia. Integer est lacus, ultricies sed feugiat id, maximus nec.</p>
              </div><!-- / about-widget -->
            </div><!-- / widget -->
            <!-- / first widget -->


            <div class="col-sm-12 col-md-4 widget">
              <div class="widget-title">
                <h4>Get in Touch</h4>
              </div>
              <div class="contact-widget">
                <div class="info">
                  <p><i class="lnr lnr-map-marker"></i><span>Miami, S Miami Ave, SW 20th.</span></p>
                </div>
                <div class="info">
                  <a href="tel:+0123456789"><i class="lnr lnr-phone-handset"></i><span>+0123 456 789</span></a>
                </div>
                <div class="info">
                  <a href="mailto:hello@yoursite.com"><i class="lnr lnr-envelope"></i><span>office@yoursite.com</span></a>
                </div>
                <div class="info">
                  <p class="social pull-left">
                    <a class="no-margin" href="#"><i class="fa fa-facebook"></i></a>
                    <a href="#"><i class="fa fa-twitter"></i></a>
                    <a href="#"><i class="fa fa-google-plus"></i></a>
                    <a href="#"><i class="fa fa-pinterest"></i></a>
                    <a href="#"><i class="fa fa-linkedin"></i></a>
                    <a href="#"><i class="fa fa-dribbble"></i></a>
                  </p>
                </div><!-- / contact-widget -->
              </div><!-- / widget -->
            </div><!-- / fourth widget -->
          </div><!-- / row -->
        </div><!-- / container -->
      </div><!-- / widget-area -->
      <div class="footer-info">
        <div class="container">
          <div class="centered">
            <p class="text-center">{{ date('Y') }} &COPY; Shaked Hetzroni All Rights Reserved<br>Design & Build by Mor Reuveni</p>


          </div>

        </div><!-- / container -->
      </div><!-- / footer-info -->
    </footer>
    <!-- / footer -->

    <!-- javascript -->
    <!--script src="{{ asset('lib/inCart/js/jquery.min.js') }}"></script-->
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="{{ asset('lib/inCart/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('lib/inCart/js/jquery.easing.min.js') }}"></script>

    <!-- scrolling-nav -->
    <script src="{{ asset('lib/inCart/js/scrolling-nav.js') }}"></script>
    <!-- / scrolling-nav -->

    <!-- sliders -->
    <script src="{{ asset('lib/inCart/js/owl.carousel.min.js') }}"></script>
    <!-- featured-products carousel -->
    <script>
      $(document).ready(function () {
        $("#products-carousel").owlCarousel({
          autoPlay: 3000, //set autoPlay to 3 seconds.
          items: 4,
          itemsDesktop: [1199, 3],
          itemsDesktopSmall: [979, 3],
        });

      });
    </script>
    <!-- / featured-products carousel -->

    <!-- brands carousel -->
    <script>
      $(document).ready(function () {
        $("#brands-carousel").owlCarousel({
          autoPlay: 5000, //set autoPlay to 5 seconds.
          items: 5,
          itemsDesktop: [1199, 3],
          itemsDesktopSmall: [979, 3]
        });

      });
    </script>
    <!-- / brands carousel -->
    <!-- / sliders -->

    <!-- shuffle grid-resizer -->
    <script src="{{ asset('lib/inCart/js/jquery.shuffle.min.js')}}"></script>
    <script src="{{ asset('lib/inCart/js/custom.js')}}"></script>
    <!-- / shuffle grid-resizer -->

    <!-- preloader -->
    <script src="{{ asset('lib/inCart/js/preloader.js')}}"></script>
    <!-- / preloader -->

    <!-- / javascript -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script src="{{ asset('js/script.js') }}" type="text/javascript"></script>
  </body>

</html>
