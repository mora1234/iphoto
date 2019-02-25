<div class="top-menu top-menu-inverse">
  <div class="container">
    <p>
      <span class="right">
        <a href="my-account.html"><i class="lnr lnr-user"></i> <span>My Account</span></a>
        <a href="{{ url('shop/checkout') }}"><i class="lnr lnr-cart"></i> <span>Shopping Cart ({{ Cart::getTotalQuantity()}})</span></a>
      </span>
    </p>
  </div><!-- / container -->
</div><!-- / top-menu-inverse -->
<nav class="navbar navbar-default">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="{{ url('') }}"><img src="{{ asset('images/logo7.png') }}" alt=""></a>
    </div><!-- / navbar-header -->
    <div class="navbar-collapse collapse">
      <ul class="nav navbar-nav">
        <li><a href="{{ url('') }}">Home</a></li>
        <li><a href="{{ url('about') }}">About Us</a></li>
        <li><a href="{{ url('shop') }}">Shop</a></li>
        @foreach($menu as $item)
        <li><a href="{{ url($item['url']) }}">{{ $item['link'] }}</a></li>
        @endforeach
        @if(! Session::has('user_id'))
        <li><a href="{{ url('user/signin') }}">Sign In</a></li>
        <li><a href="{{ url('user/signup') }}">Sign Up</a></li>
        @else
        @if( Session::has('is_admin') )
        <li><a href="{{ url('cms/dashboard') }}">Admin Panel</a></li>
        @endif
        <li><a href="{{ url('user/logout') }}">Log Out</a></li>
        <li><a href="{{ url('user/profile') }}">{{Session::get('user_name')}}</a></li>
        @endif
      </ul>
    </div><!--/ nav-collapse -->
  </div><!--/ container -->
</nav> <!--/ navbar -->

