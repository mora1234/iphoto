@extends('master')

@section('main_content')

<!-- categories -->
<section id="categories">
  <div class="container">
    <div class="page-header text-center wsub">
      <h2>Shop Categories</h2>
    </div><!--/ page-header -->
    <p class="title-description text-center">Proin malesuada commodo magna, eu porta nulla luctus id. Integer bibendum dolor id mi dignissim pulvinar. Proin tincidunt elit in augue congue efficitur.</p>
    <div class="row">
      @if($categories)
      @foreach($categories as $category)
      <div class="col-sm-4 category">
        <a href="{{ url('shop/'.$category['curl']) }}">
          <div class="category-item">
            <img src="{{ asset('images/'.$category['cimage'])}}" alt="">
            <div class="overlay">
              <div class="caption">
                <h4>{{ $category['ctitle'] }}</h4>
              </div>
            </div>
          </div><!-- / category-item -->
        </a>
      </div><!-- / category -->
      @endforeach
      @else
      <div class="col-md-12">
        <p><i>No categories available</i></p>
      </div>
      @endif
    </div><!-- / row -->
  </div><!-- / container -->
</section>
<!-- / categories -->

@endsection
