@extends('cms.cms_master')
@section('cms_content')
<h1>Add New Menu Link</h1>
<div class="row">
  <div class="col-md-6 link-form">
    <form action="{{ url('cms/menu') }}" method="POST">
      @csrf
      <div class="form-group">
        <label class="hidden" for="link">Link</label>
        <input type="text" value="{{ old('link') }}" name="link" class="form-control origin-text" id="link" placeholder="Link">
      </div>
      <div class="form-group">
        <label class="hidden" for="mtitle">Page Title</label>
        <input type="text" value="{{ old('mtitle') }}" name="mtitle" class="form-control" id="mtitle" placeholder="Page Title">
      </div>
      <div class="form-group">
        <label class="hidden" for="url">URL</label>
        <input type="text" value="{{ old('url') }}" name="url" class="form-control target-text" id="url" placeholder="URL">
      </div>

      <input type="submit" name="submit" value="Save Link" class="btn btn-primary pull-right">
      <a href="{{ url('cms/menu') }}" class="btn btn-default" role="button">Cancel</a>
    </form>

  </div>
</div>
@endsection
