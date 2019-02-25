@extends('cms.cms_master')
@section('cms_content')
<h1>Add New Content</h1>
<div class="row">
  <div class="col-md-8 link-form">
    <form action="{{ url('cms/content') }}" method="POST">
      @csrf
     <div class="form-group">
       <label for="menu-id" class="hidden">Menu Link</label>
        <select class="form-control" name="menu_id" id="menu-id">
          <option value="">Choose Menu Link..</option>
          @foreach($menu as $item)
          <option @if( old('menu_id') == $item['id'] ) selected="selected" @endif value="{{ $item['id'] }}">{{ $item['link'] }}</option>
          @endforeach
        </select>
      </div>
      <div class="form-group">
        <label class="hidden" for="title">Title</label>
        <input type="text" value="{{ old('title') }}" name="title" class="form-control" id="title" placeholder="Title">
      </div>
      <div class="form-group">
        <label class="hidden" for="article">Article</label>
        <textarea class="form-control" name="article" id="article">{{ old('article') }}</textarea>
      </div>
<input type="submit" name="submit" value="Save Content" class="btn btn-primary pull-right">
      <a href="{{ url('cms/content') }}" class="btn btn-default" role="button">Cancel</a>
    </form>
  </div>
  </div>
@endsection
