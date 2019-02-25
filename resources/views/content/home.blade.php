@extends('master')

@section('main_content')


<!-- content -->





<!-- shop 3col -->
<section id="shop">
    <div class="page-header text-center wsub">
        <h2>New Arrivals</h2>
    </div><!--/ page-header -->
    <div class="container">
        <div id="grid" class="row">

            <!-- product -->
            <div class="col-xs-6 col-md-4 product">
                <a href="single-product.html" class="product-link"></a>
                <!-- / product-link -->
                <img src="lib/inCart/images/f-product.jpg" alt="">
                <!-- / product-image -->

                <!-- product-hover-tools -->
                <div class="product-hover-tools">
                    <a href="single-product.html" class="view-btn">
                        <i class="lnr lnr-eye"></i>
                    </a>
                    <a href="shopping-cart.html" class="add-to-cart">
                        <i class="lnr lnr-cart"></i>
                    </a>
                </div><!-- / product-hover-tools -->

                <!-- product-details -->
                <div class="product-details">
                    <h3 class="product-title">Women's Shirt</h3>
                    <h6 class="product-price">$59</h6>
                </div><!-- / product-details -->
            </div><!-- / product -->

            <!-- product -->
            <div class="col-xs-6 col-md-4 product">
                <span class="sale-label">SALE</span>
                <a href="single-product.html" class="product-link"></a>
                <!-- / product-link -->
                <img src="lib/inCart/images/f-product.jpg" alt="">
                <!-- / product-image -->

                <!-- product-hover-tools -->
                <div class="product-hover-tools">
                    <a href="single-product.html" class="view-btn">
                        <i class="lnr lnr-eye"></i>
                    </a>
                    <a href="shopping-cart.html" class="add-to-cart">
                        <i class="lnr lnr-cart"></i>
                    </a>
                </div><!-- / product-hover-tools -->

                <!-- product-details -->
                <div class="product-details">
                    <h3 class="product-title">Women's Shirt</h3>
                    <h6 class="product-price"><del>$49</del> <span class="sale-price">$29</span></h6>
                </div><!-- / product-details -->
            </div><!-- / product -->

            <!-- product -->
            <div class="col-xs-6 col-md-4 product">
                <a href="single-product.html" class="product-link"></a>
                <!-- / product-link -->
                <img src="lib/inCart/images/f-product.jpg" alt="">
                <!-- / product-image -->

                <!-- product-hover-tools -->
                <div class="product-hover-tools">
                    <a href="single-product.html" class="view-btn">
                        <i class="lnr lnr-eye"></i>
                    </a>
                    <a href="shopping-cart.html" class="add-to-cart">
                        <i class="lnr lnr-cart"></i>
                    </a>
                </div><!-- / product-hover-tools -->

                <!-- product-details -->
                <div class="product-details">
                    <h3 class="product-title">Women's Shirt</h3>
                    <h6 class="product-price">$99</h6>
                </div><!-- / product-details -->
            </div><!-- / product -->



            <!-- grid-resizer -->
            <div class="col-xs-6 col-md-4 shuffle_sizer"></div>
            <!-- / grid-resizer -->

        </div><!-- / row -->
    </div><!-- / container -->
</section>
<!-- / shop 3col -->

<!-- features section 3col -->
<section id="features">
    <div class="container">
        <div class="row">
            <!-- feature-block -->
            <div class="col-md-4 feature-center">
                <div class="feature block">
                    <div class="feature-icon">
                        <i class="lnr lnr-gift"></i>
                    </div>
                    <h5>Free Shipping</h5>
                    <p>Free Worldwide shipping</p>
                </div>
            </div><!-- / col-md-4 -->
            <!-- / feature-block -->

            <!-- feature-block -->
            <div class="col-md-4 feature-center">
                <div class="feature block">
                    <div class="feature-icon">
                        <i class="lnr lnr-clock"></i>
                    </div>
                    <h5>Fast Delivery</h5>
                    <p>Ultra fast WoldWide delivery</p>
                </div>
            </div><!-- / col-md-4 -->
            <!-- / feature-block -->

            <!-- feature-block -->
            <div class="col-md-4 feature-center">
                <div class="feature block">
                    <div class="feature-icon">
                        <i class="lnr lnr-exit"></i>
                    </div>
                    <h5>Money Back</h5>
                    <p>Money back guarantee</p>
                </div>
            </div><!-- / col-md-4 -->
            <!-- / feature-block -->
        </div><!-- / row -->
    </div><!-- / container -->
</section>
<!-- / features section 3col -->



<!-- / content -->
@endsection