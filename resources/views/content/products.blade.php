@extends('master')

@section('main_content')


<!-- featured-products -->
<section id="featured-products">
    <div class="page-header text-center wsub">
       @if($title != 'Iphoto | ')
        <h2>{{ $title }}</h2>
          @endif
    </div><!--/ page-header -->
    <div id="products-carousel" class="owl-carousel">
@if($products)
@foreach($products as $product)
        <!-- item -->
        <div class="item product">
            <a href="{{ url('shop/'.$product->curl.'/'.$product->purl) }}" class="product-link"></a>
            <!-- / product-link -->
            <img src="{{ asset('images/'.$product->pimage) }}" alt="">
            <!-- / product-image -->

            <!-- product-hover-tools -->
            <div class="product-hover-tools">
                <a href="{{ url('shop/'.$product->curl.'/'.$product->purl) }}" class="view-btn">
                    <i class="lnr lnr-eye"></i>
                </a>
              @if(!Cart::get($product->id))
              <a href="#" data-id="{{ $product->id }}" class="add-to-cart to-cart">
                    <i class="lnr lnr-cart"></i>
                </a>
              @else <a href="#" class="disabled" class="add-to-cart">
                    <i class="lnr lnr-cart"></i>
                </a>
              @endif
            </div><!-- / product-hover-tools -->
            <!-- product-details -->
            <div class="product-details">           
                <h3 class="product-title">{{ $product->ptitle }}</h3>            
                <h6 class="product-price">${{ $product->price }}</h6>
            </div><!-- / product-details -->
        </div>
        <!-- / item -->
        @endforeach
        @else
      <div class="col-md-12">
        <p><i>No products available</i></p>
      </div>
      @endif


 

        
    </div> <!-- / products-carousel -->
</section>
<!-- / featured-products -->

@endsection