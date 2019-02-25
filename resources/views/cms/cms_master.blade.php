
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
    <title>Iphoto | Admin Panel</title>
    <!-- bootstrap css -->
    <link href="{{ asset('lib/inCart/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:400,500,700" rel="stylesheet">
    <link href="{{ asset('lib/inCart/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">
    <link href='{{ asset('lib/inCart/fonts/FontAwesome.otf')}}' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="{{ asset('lib/inCart/css/linear-icons.css')}}">
    <link href="{{ asset('css/dashboard.css') }}" rel="stylesheet" type="text/css"/>
    <link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote.css" rel="stylesheet">
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

    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="{{ url('cms/dashboard') }}">Iphoto | Admin Panel</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a target="_blank" href="{{ url('') }}">Back To Site</a></li>
            <li><a href="{{ url('user/logout') }}">Log Out</a></li>
          </ul>

        </div>
      </div>
    </nav>

    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
          <ul class="nav nav-sidebar">
            <li><a href="{{ url('cms/dashboard') }}">Dashboard</a></li>
            <li><a href="{{ url('cms/menu') }}">Menu</a></li>
            <li><a href="{{ url('cms/content') }}">Content</a></li>
            <li><a href="{{ url('cms/categories') }}">Categories</a></li>
            <li><a href="{{ url('cms/products') }}">Products</a></li>
            <li><a href="{{ url('cms/orders') }}">Orders</a></li>
          </ul>
        </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          @if(Session::has('sm'))
          <div id="sm-box" class="row">
            <div class="col-sm-12">
              <div class="alert alert-success" role="alert">
                <p>{{ Session::get('sm') }}</p>
              </div>
            </div>
          </div>
          @endif
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
          @yield('cms_content')
        </div>
      </div>
    </div>


    <!-- javascript -->
    <script src="{{ asset('lib/inCart/js/jquery.min.js') }}"></script>
    <script src="{{ asset('lib/inCart/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('lib/inCart/js/jquery.easing.min.js') }}"></script>



    <!-- / javascript -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote.js"></script>
    <script src="{{ asset('js/script.js') }}" type="text/javascript"></script>
  </body>

</html>
