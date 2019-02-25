@extends('cms.cms_master')
@section('cms_content')
<h1>Add New Category</h1>
<div class="row">
  <div class="col-md-8 link-form">
    <form action="{{ url('cms/categories') }}" method="POST" enctype="multipart/form-data">
      @csrf
      <div class="form-group">
        <label class="hidden" for="ctitle">Category Name</label>
        <input type="text" value="{{ old('ctitle') }}" name="ctitle" class="form-control origin-text" id="ctitle" placeholder="Category Name">
      </div>
      <div class="form-group">
        <label class="hidden" for="curl">URL</label>
        <input type="text" value="{{ old('curl') }}" name="curl" class="form-control target-text" id="curl" placeholder="URL">
      </div>
      <div class="form-group">
        <label for="carticle">Article</label>
        <textarea class="form-control" name="carticle" id="article">{{ old('carticle') }}</textarea>
      </div>
      <div class="form-group">
        <label for="cimage">Category Image</label>
        <input type="file" name="cimage" id="cimage">
      </div>
      <input type="submit" name="submit" value="Save Category" class="btn btn-primary pull-right">
      <a href="{{ url('cms/categories') }}" class="btn btn-default" role="button">Cancel</a>
    </form>

  </div>
</div>
@endsection
