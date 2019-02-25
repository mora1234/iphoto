@extends('master')
@section('main_content')
@if($contents)
@foreach($contents as $content)
<div class="container">
  <div class="page-header text-center space-top-30">
    <h3>{{ $content->title }}</h3>
  </div>
  <p>{!! $content->article !!}</p>
</div>
@endforeach
@else
<div class="row">
  <div class="col-md-12">
    <i>There is no content for this menu link</i> 
  </div>
</div>
@endif

@endsection
