@extends('master')

@section('main_content')

<!-- shop single-product -->
<section id="shop">
  <div class="container">
    @if($product)
    <div class="row">


      <!-- product content area -->
      <div class="col-sm-6 col-md-7 content-area">
        <div class="product-content-area">
          <div id="product-slider" class="carousel slide" data-ride="carousel">
            <div class="item">
              <img src="{{ asset('images/'.$product->pimage) }}" alt="">
            </div>

          </div><!-- / product-slider -->


          <!-- / tab-content -->
        </div><!-- / product-content-area -->


      </div>
      <!-- / project-content-area -->

      <!-- project sidebar area -->
      <div class="col-sm-6 col-md-5 product-sidebar">
        <div class="product-details">
          <h4>{{ $product->ptitle }}</h4>
          <p>{!! $product->particle !!}</p>
          <h4 class="space-top-30">Product Info</h4>
          <div class="product-info">
            <div class="info">
              <p><i class="lnr lnr-tag"></i><span>Price: ${{ $product->price }}</span></p>
            </div>
          </div><!-- / project-info -->
          <div class="buy-product">
            <!-- / options -->
            <div class="space-25">&nbsp;</div>
            <a href="#" data-id="{{ $product->id }}" class="btn btn-primary-filled btn-rounded to-cart"><i class="lnr lnr-cart"></i><span> Add to Cart</span></a>
            <a href="{{ url('shop/checkout') }}" class="btn btn-success-filled btn-rounded"><i class="lnr lnr-heart"></i><span> Go to cart</span></a>
          </div>
          <a href="{{ url('shop') }}" class="btn btn-default-filled btn-rounded centered"><i class="lnr lnr-cart"></i> <span>Continue Shopping</span></a>
        </div><!-- product-details -->
      </div><!-- / col-sm-4 col-md-3 -->
      <!-- / project sidebar area -->
    </div><!-- / row -->
  </div><!-- / container -->
  @else
  <div class="col-md-12">
    <p><i>Product not available</i></p>
  </div>
  @endif
</section>
<!-- / shop single-product -->

@endsection