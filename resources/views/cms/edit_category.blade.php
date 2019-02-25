@extends('cms.cms_master')
@section('cms_content')
<h1>Edit Category</h1>
<div class="row">
  <div class="col-md-8 link-form">
    <form action="{{ url('cms/categories/'.$item['id']) }}" method="POST" enctype="multipart/form-data">
      @csrf
      {{ method_field('PUT') }}
      <input type="hidden" name="item_id" value="{{ $item['id'] }}">
      <div class="form-group">
        <label for="ctitle">Category Name</label>
        <input type="text" value="{{ $item['ctitle'] }}" name="ctitle" class="form-control origin-text" id="ctitle" placeholder="Category Name">
      </div>
      <div class="form-group">
        <label for="curl">URL</label>
        <input type="text" value="{{ $item['curl'] }}" name="curl" class="form-control target-text" id="curl" placeholder="URL">
      </div>
      <div class="form-group">
        <label for="carticle">Article</label>
        <textarea class="form-control" name="carticle" id="article">{{ $item['carticle'] }}</textarea>
      </div>
      <div class="form-group">
        <label for="cimage">Change Category Image</label>
        <input type="file" name="cimage" id="cimage">
        <img class="photo-edit-admin" width="60" src="{{ asset('images/'.$item['cimage']) }}" >
      </div>
      <input type="submit" name="submit" value="Update Category" class="btn btn-primary pull-right">
          <a href="{{ url('cms/categories') }}" class="btn btn-default" role="button">Cancel</a>
          </form>

          </div>
          </div>
          @endsection
