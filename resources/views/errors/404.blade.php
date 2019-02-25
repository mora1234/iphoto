<?php $menu = App\Menu::all()->toArray(); ?>
@extends('master')
@section('main_content')
<section id="page-not-found">
    <div class="container">
        <div class="text-wrap text-center">
            <div class="page-header text-center space-top-30">
                <h1><i class="lnr lnr-warning"></i> 404!</h1>
            </div><!-- / page-header -->
            <p class="large-p">Page Not Found!</p>
            <p class="space-top-2x"><a href="{{ url('') }}" class="btn btn-default-filled btn-rounded"><i class="fa fa-long-arrow-left"></i><span>Back to Home Page</span></a></p>
        </div><!-- / text-wrap -->
    </div><!-- / container -->
</section>

@endsection